<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Form\ContinentType;
use App\Repository\ContinentRepository;
use App\Repository\WorldRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class ContinentController extends AbstractController
{
    #[Route('/world/{worldId}/continents', name: 'app_continents')]
    public function index(int $worldId, ContinentRepository $continentRepo, WorldRepository $worldRepo): Response
    {
        $world = $worldRepo->find($worldId);

        if (!$world) {
            throw $this->createNotFoundException('World not found');
        }

        $continents = $continentRepo->findBy(['Continent_World' => $world]);

        return $this->render('continent/index.html.twig', [
            'world' => $world,
            'continents' => $continents,
        ]);
    }

    #[Route('/world/{worldId}/continent/create', name: 'app_continent_create')]
    public function create(
        int $worldId,
        Request $request,
        EntityManagerInterface $em,
        WorldRepository $worldRepo,
        SluggerInterface $slugger
    ): Response {
        $world = $worldRepo->find($worldId);

        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $continent = new Continent();
        $continent->setContinentWorld($world);

        $form = $this->createForm(ContinentType::class, $continent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Continent')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('continents_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error while uploading image.');
                }

                $continent->setImageContinent($newFilename);
            }

            $em->persist($continent);
            $em->flush();

            return $this->redirectToRoute('app_continents', ['worldId' => $worldId]);
        }

        return $this->render('continent/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Continent',
            'worldId' => $worldId,
        ]);
    }

    #[Route('/continent/{id}', name: 'app_continent_show')]
    public function show(Continent $continent): Response
    {
        return $this->render('continent/show.html.twig', [
            'continent' => $continent,
        ]);
    }

    #[Route('/continent/{id}/edit', name: 'app_continent_edit')]
    public function edit(
        Continent $continent,
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger
    ): Response {
        $form = $this->createForm(ContinentType::class, $continent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Continent')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('continents_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error while uploading image.');
                }

                $continent->setImageContinent($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_continents', [
                'worldId' => $continent->getContinentWorld()->getId(),
            ]);
        }

        return $this->render('continent/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Continent',
            'worldId' => $continent->getContinentWorld()->getId(),
        ]);
    }

    #[Route('/continent/{id}/delete', name: 'app_continent_delete')]
    public function delete(Continent $continent, EntityManagerInterface $em): Response
    {
        $worldId = $continent->getContinentWorld()->getId();
        $em->remove($continent);
        $em->flush();

        return $this->redirectToRoute('app_continents', ['worldId' => $worldId]);
    }
}
