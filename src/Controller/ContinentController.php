<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Form\ContinentType;
use App\Form\ContinentFilterType;
use App\Repository\ContinentRepository;
use App\Repository\WorldRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class ContinentController extends AbstractController
{
    #[Route('/world/{worldId}/continents', name: 'app_continents')]
    public function index(
        int $worldId,
        Request $request,
        EntityManagerInterface $em,
        ContinentRepository $continentRepo,
        WorldRepository $worldRepo
    ): Response {
        $world = $worldRepo->find($worldId);

        if (!$world) {
            throw $this->createNotFoundException('World not found');
        }

        $form = $this->createForm(ContinentFilterType::class, null, [
            'method' => 'GET',
        ]);
        $form->handleRequest($request);

        $qb = $em->getRepository(Continent::class)->createQueryBuilder('c')
            ->where('c.Continent_World = :world')
            ->setParameter('world', $world);

        if ($form->isSubmitted() && $form->isValid() && !empty($form->getData()['name'])) {
            $qb->andWhere('LOWER(c.Name) LIKE :name')
               ->setParameter('name', '%' . strtolower($form->getData()['name']) . '%');
        }

        $continents = $qb->getQuery()->getResult();

        return $this->render('continent/index.html.twig', [
            'world' => $world,
            'continents' => $continents,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/world/{worldId}/continent/create', name: 'app_continent_create')]
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

                $targetDir = $this->getParameter('continents_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

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
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $form = $this->createForm(ContinentType::class, $continent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Continent')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('continents_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

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
