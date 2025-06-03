<?php

namespace App\Controller;

use App\Entity\Faction;
use App\Form\FactionType;
use App\Form\FactionFilterType;
use App\Repository\WorldRepository;
use App\Repository\FactionRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class FactionController extends AbstractController
{
    #[Route('/world/{worldId}/factions', name: 'app_factions')]
    public function index(
        int $worldId,
        FactionRepository $factionRepo,
        WorldRepository $worldRepo,
        Request $request,
        EntityManagerInterface $em
    ): Response {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $form = $this->createForm(FactionFilterType::class, null, [
            'method' => 'GET',
            'world' => $world,
        ]);
        $form->handleRequest($request);

        $qb = $em->getRepository(Faction::class)->createQueryBuilder('f')
            ->leftJoin('f.Faction_Continent', 'c')
            ->addSelect('c')
            ->where('f.Faction_World = :world')
            ->setParameter('world', $world);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            if (!empty($data['continent'])) {
                $qb->andWhere('c = :continent')
                   ->setParameter('continent', $data['continent']);
            }

            if (!empty($data['name'])) {
                $qb->andWhere('LOWER(f.Name) LIKE :name')
                   ->setParameter('name', '%' . strtolower($data['name']) . '%');
            }
        }

        $factions = $qb->getQuery()->getResult();

        return $this->render('faction/index.html.twig', [
            'factions' => $factions,
            'world' => $world,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/world/{worldId}/faction/create', name: 'app_faction_create')]
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

        $faction = new Faction();
        $faction->setFactionWorld($world);

        $form = $this->createForm(FactionType::class, $faction, [
            'world' => $world,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Faction')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('factions_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

                $faction->setImageFaction($newFilename);
            }

            $em->persist($faction);
            $em->flush();

            return $this->redirectToRoute('app_factions', ['worldId' => $worldId]);
        }

        return $this->render('faction/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Faction',
            'worldId' => $worldId,
        ]);
    }

    #[Route('/faction/edit/{id}', name: 'app_faction_edit')]
    public function edit(
        Request $request,
        Faction $faction,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $form = $this->createForm(FactionType::class, $faction, [
            'world' => $faction->getFactionWorld(),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Faction')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('factions_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

                $faction->setImageFaction($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_factions', [
                'worldId' => $faction->getFactionWorld()->getId(),
            ]);
        }

        return $this->render('faction/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Faction',
            'worldId' => $faction->getFactionWorld()->getId(),
        ]);
    }

    #[Route('/faction/delete/{id}', name: 'app_faction_delete')]
    public function delete(Faction $faction, EntityManagerInterface $em): Response
    {
        $worldId = $faction->getFactionWorld()->getId();

        $em->remove($faction);
        $em->flush();

        return $this->redirectToRoute('app_factions', [
            'worldId' => $worldId,
        ]);
    }

    #[Route('/faction/show/{id}', name: 'app_faction_show')]
    public function show(Faction $faction): Response
    {
        return $this->render('faction/show.html.twig', [
            'faction' => $faction,
        ]);
    }
}
