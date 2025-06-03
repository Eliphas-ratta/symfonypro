<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Form\HeroType;
use App\Form\HeroFilterType;
use App\Repository\HeroRepository;
use App\Repository\WorldRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class HeroController extends AbstractController
{
    #[Route('/hero/{worldId}', name: 'app_hero')]
    public function index(
        int $worldId,
        Request $request,
        HeroRepository $heroRepository,
        WorldRepository $worldRepo,
        EntityManagerInterface $em
    ): Response {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $form = $this->createForm(HeroFilterType::class, null, [
            'method' => 'GET',
            'world' => $world
        ]);
        $form->handleRequest($request);

        $qb = $em->getRepository(Hero::class)->createQueryBuilder('h')
            ->leftJoin('h.Hero_Faction', 'f')
            ->leftJoin('h.guilds', 'g')
            ->leftJoin('h.Hero_Race', 'r')
            ->addSelect('f', 'g', 'r')
            ->where('h.Hero_World = :world')
            ->setParameter('world', $world);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            if (!empty($data['name'])) {
                $qb->andWhere('LOWER(h.Name) LIKE :name')
                   ->setParameter('name', '%' . strtolower($data['name']) . '%');
            }

           if (!empty($data['factions'])) {
    $qb->andWhere('f = :factions')
       ->setParameter('factions', $data['factions']);
}

if (!empty($data['guilds'])) {
    $qb->andWhere('g = :guilds')
       ->setParameter('guilds', $data['guilds']);
}

if (!empty($data['races'])) {
    $qb->andWhere('r = :races')
       ->setParameter('races', $data['races']);
}

        }

        $heroes = $qb->getQuery()->getResult();

        return $this->render('hero/index.html.twig', [
            'heroes' => $heroes,
            'world' => $world,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/hero/create/{worldId}', name: 'app_hero_create')]
    public function create(
        Request $request,
        EntityManagerInterface $em,
        WorldRepository $worldRepo,
        int $worldId,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found');
        }

        $hero = new Hero();
        $hero->setHeroWorld($world);

        $form = $this->createForm(HeroType::class, $hero, ['world' => $world]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Hero')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('heroes_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);
                $hero->setImageHero($newFilename);
            }

            $em->persist($hero);
            $em->flush();

            return $this->redirectToRoute('app_hero', ['worldId' => $worldId]);
        }

        return $this->render('hero/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Hero',
        ]);
    }

    #[Route('/hero/edit/{id}', name: 'app_hero_edit')]
    public function edit(
        Request $request,
        Hero $hero,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $world = $hero->getHeroWorld();

        $form = $this->createForm(HeroType::class, $hero, ['world' => $world]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Hero')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('heroes_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);
                $hero->setImageHero($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_hero', ['worldId' => $world->getId()]);
        }

        return $this->render('hero/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Hero',
        ]);
    }

    #[Route('/hero/delete/{id}', name: 'app_hero_delete')]
    public function delete(Hero $hero, EntityManagerInterface $em): Response
    {
        $worldId = $hero->getHeroWorld()->getId();
        $em->remove($hero);
        $em->flush();

        return $this->redirectToRoute('app_hero', ['worldId' => $worldId]);
    }

    #[Route('/hero/show/{id}', name: 'app_hero_show')]
    public function show(Hero $hero): Response
    {
        return $this->render('hero/show.html.twig', [
            'hero' => $hero,
        ]);
    }
}
