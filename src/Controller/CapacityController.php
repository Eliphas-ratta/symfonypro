<?php

namespace App\Controller;

use App\Entity\Capacity;
use App\Form\CapacityFilterType;
use App\Form\CapacityType;
use App\Repository\CapacityRepository;
use App\Repository\DomainRepository;
use App\Repository\WorldRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class CapacityController extends AbstractController
{
    #[Route('/world/{worldId}/capacities', name: 'app_capacities')]
    public function index(
        int $worldId,
        Request $request,
        CapacityRepository $capacityRepo,
        WorldRepository $worldRepo,
        DomainRepository $domainRepo
    ): Response {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $form = $this->createForm(CapacityFilterType::class, null, [
            'method' => 'GET',
            'world' => $world,
        ]);
        $form->handleRequest($request);

        $filters = $form->getData() ?? [];
        $capacities = $capacityRepo->findFilteredCapacities($filters, $world);


        return $this->render('capacity/index.html.twig', [
            'capacities' => $capacities,
            'world' => $world,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/world/{worldId}/capacity/create', name: 'app_capacity_create')]
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

        $capacity = new Capacity();
        $capacity->setCapacityWorld($world);

        $form = $this->createForm(CapacityType::class, $capacity, [
            'world' => $world,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Capacity')->getData();
            if ($imageFile) {
                $filename = $slugger->slug(pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . uniqid() . '.' . $imageFile->guessExtension();
                $targetDir = $this->getParameter('capacities_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $filename);
                $capacity->setImageCapacity($filename);
            }

            $em->persist($capacity);
            $em->flush();

            return $this->redirectToRoute('app_capacities', ['worldId' => $worldId]);
        }

        return $this->render('capacity/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Capacity',
            'worldId' => $worldId,
        ]);
    }

    #[Route('/capacity/edit/{id}', name: 'app_capacity_edit')]
    public function edit(
        Request $request,
        Capacity $capacity,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $world = $capacity->getCapacityWorld();

        $form = $this->createForm(CapacityType::class, $capacity, [
            'world' => $world,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Capacity')->getData();
            if ($imageFile) {
                $filename = $slugger->slug(pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . uniqid() . '.' . $imageFile->guessExtension();
                $targetDir = $this->getParameter('capacities_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $filename);
                $capacity->setImageCapacity($filename);
            }

            $em->flush();

            return $this->redirectToRoute('app_capacities', [
                'worldId' => $world->getId(),
            ]);
        }

        return $this->render('capacity/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Capacity',
            'worldId' => $world->getId(),
        ]);
    }

    #[Route('/capacity/delete/{id}', name: 'app_capacity_delete')]
    public function delete(Capacity $capacity, EntityManagerInterface $em): Response
    {
        $worldId = $capacity->getCapacityWorld()->getId();

        $em->remove($capacity);
        $em->flush();

        return $this->redirectToRoute('app_capacities', [
            'worldId' => $worldId,
        ]);
    }

    #[Route('/capacity/show/{id}', name: 'app_capacity_show')]
    public function show(Capacity $capacity): Response
    {
        return $this->render('capacity/show.html.twig', [
            'capacity' => $capacity,
        ]);
    }
}
