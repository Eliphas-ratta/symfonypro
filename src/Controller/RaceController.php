<?php

namespace App\Controller;

use App\Entity\Race;
use App\Form\RaceType;
use App\Repository\RaceRepository;
use App\Repository\WorldRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class RaceController extends AbstractController
{
    #[Route('/world/{worldId}/races', name: 'app_races')]
    public function index(int $worldId, RaceRepository $raceRepo, WorldRepository $worldRepo): Response
    {
        $world = $worldRepo->find($worldId);

        if (!$world) {
            throw $this->createNotFoundException('World not found');
        }

        $races = $raceRepo->findBy(['Race_World' => $world]);

        return $this->render('race/index.html.twig', [
            'world' => $world,
            'races' => $races,
        ]);
    }

    #[Route('/world/{worldId}/race/create', name: 'app_race_create')]
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

        $race = new Race();
        $race->setRaceWorld($world);

        $form = $this->createForm(RaceType::class, $race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Race')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('races_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

                $race->setImageRace($newFilename);
            }

            $em->persist($race);
            $em->flush();

            return $this->redirectToRoute('app_races', ['worldId' => $worldId]);
        }

        return $this->render('race/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Race',
            'worldId' => $worldId,
        ]);
    }

    #[Route('/race/show/{id}', name: 'app_race_show')]
    public function show(Race $race): Response
    {
        return $this->render('race/show.html.twig', [
            'race' => $race,
        ]);
    }

    #[Route('/race/edit/{id}', name: 'app_race_edit')]
    public function edit(
        Request $request,
        Race $race,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $form = $this->createForm(RaceType::class, $race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Race')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('races_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

                $race->setImageRace($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_races', [
                'worldId' => $race->getRaceWorld()->getId(),
            ]);
        }

        return $this->render('race/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Race',
            'worldId' => $race->getRaceWorld()->getId(),
        ]);
    }

    #[Route('/race/delete/{id}', name: 'app_race_delete')]
    public function delete(Race $race, EntityManagerInterface $em): Response
    {
        $worldId = $race->getRaceWorld()->getId();

        $em->remove($race);
        $em->flush();

        return $this->redirectToRoute('app_races', ['worldId' => $worldId]);
    }
}
