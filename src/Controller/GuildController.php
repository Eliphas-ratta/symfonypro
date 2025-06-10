<?php

namespace App\Controller;

use App\Entity\Guild;
use App\Form\GuildFilterType;
use App\Form\GuildType;
use App\Repository\GuildRepository;
use App\Repository\WorldRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class GuildController extends AbstractController
{
    #[Route('/world/{worldId}/guilds', name: 'app_guilds')]
    public function index(
        int $worldId,
        Request $request,
        EntityManagerInterface $em,
        WorldRepository $worldRepo
    ): Response {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $form = $this->createForm(GuildFilterType::class, null, [
            'method' => 'GET',
            'world' => $world,
        ]);
        $form->handleRequest($request);

        $qb = $em->getRepository(Guild::class)->createQueryBuilder('g')
            ->leftJoin('g.Guild_Faction', 'f')
            ->addSelect('f')
            ->leftJoin('g.Guild_World', 'w')
            ->where(':world MEMBER OF g.Guild_World')
            ->setParameter('world', $world);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            if (!empty($data['name'])) {
                $qb->andWhere('LOWER(g.Name) LIKE :name')
                   ->setParameter('name', '%' . strtolower($data['name']) . '%');
            }

            if (!empty($data['factions'])) {
                $qb->andWhere(':faction MEMBER OF g.Guild_Faction')
                   ->setParameter('faction', $data['factions']);
            }
        }

        $guilds = $qb->getQuery()->getResult();

        return $this->render('guild/index.html.twig', [
            'guilds' => $guilds,
            'world' => $world,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/world/{worldId}/guild/create', name: 'app_guild_create')]
    public function create(
        int $worldId,
        Request $request,
        EntityManagerInterface $em,
        WorldRepository $worldRepo,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $guild = new Guild();
        $guild->addGuildWorld($world);

        $form = $this->createForm(GuildType::class, $guild, [
            'world' => $world,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($guild->getHeroes() as $hero) {
                $hero->addGuild($guild);
            }
            foreach ($guild->getGuildFaction() as $faction) {
                $faction->addFactionGuild($guild);
            }

            $imageFile = $form->get('Image_Guild')->getData();
            if ($imageFile) {
                $newFilename = $slugger->slug(pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . uniqid() . '.' . $imageFile->guessExtension();
                $targetDirectory = $this->getParameter('guilds_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDirectory, $newFilename);
                $guild->setImageGuild($newFilename);
            }

            $em->persist($guild);
            $em->flush();

            return $this->redirectToRoute('app_guilds', ['worldId' => $worldId]);
        }

        return $this->render('guild/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Guild',
            'worldId' => $worldId,
        ]);
    }

    #[Route('/guild/edit/{id}', name: 'app_guild_edit')]
    public function edit(
        Request $request,
        Guild $guild,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $world = $guild->getGuildWorld()->first();

        $form = $this->createForm(GuildType::class, $guild, [
            'world' => $world,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($guild->getHeroes() as $hero) {
                $hero->addGuild($guild);
            }
            foreach ($guild->getGuildFaction() as $faction) {
                $faction->addFactionGuild($guild);
            }

            $imageFile = $form->get('Image_Guild')->getData();
            if ($imageFile) {
                $newFilename = $slugger->slug(pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . uniqid() . '.' . $imageFile->guessExtension();
                $targetDirectory = $this->getParameter('guilds_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDirectory, $newFilename);
                $guild->setImageGuild($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_guilds', [
                'worldId' => $world->getId(),
            ]);
        }

        return $this->render('guild/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Guild',
            'worldId' => $world->getId(),
        ]);
    }

    #[Route('/guild/delete/{id}', name: 'app_guild_delete')]
    public function delete(Guild $guild, EntityManagerInterface $em): Response
    {
        $worldId = $guild->getGuildWorld()->first()?->getId();

        $em->remove($guild);
        $em->flush();

        return $this->redirectToRoute('app_guilds', [
            'worldId' => $worldId,
        ]);
    }

    #[Route('/guild/show/{id}', name: 'app_guild_show')]
    public function show(Guild $guild): Response
    {
        return $this->render('guild/show.html.twig', [
            'guild' => $guild,
        ]);
    }
}
