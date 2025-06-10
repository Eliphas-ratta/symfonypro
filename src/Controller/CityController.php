<?php

namespace App\Controller;

use App\Entity\City;
use App\Form\CityType;
use App\Form\CityFilterType;
use App\Repository\CityRepository;
use App\Repository\WorldRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class CityController extends AbstractController
{
    #[Route('/city/{worldId}', name: 'app_city')]
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

        $form = $this->createForm(CityFilterType::class, null, [
            'method' => 'GET',
            'world' => $world,
        ]);
        $form->handleRequest($request);

        $qb = $em->getRepository(City::class)->createQueryBuilder('c')
            ->leftJoin('c.City_Faction', 'f')
            ->addSelect('f')
            ->where('c.City_World = :world')
            ->setParameter('world', $world);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            if (!empty($data['name'])) {
                $qb->andWhere('LOWER(c.Name) LIKE :name')
                   ->setParameter('name', '%' . strtolower($data['name']) . '%');
            }

            if (!empty($data['factions'])) {
                $qb->andWhere(':faction MEMBER OF c.City_Faction')
                   ->setParameter('faction', $data['factions']);
            }
        }

        $cities = $qb->getQuery()->getResult();

        return $this->render('city/index.html.twig', [
            'cities' => $cities,
            'world' => $world,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/city/create/{worldId}', name: 'app_city_create')]
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
            throw $this->createNotFoundException('World not found.');
        }

        $city = new City();
        $city->setCityWorld($world);

        $form = $this->createForm(CityType::class, $city, [
            'world' => $world,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $factions = $form->get('CityFaction')->getData();
            foreach ($factions as $faction) {
                $city->addCityFaction($faction);
            }

            $imageFile = $form->get('Image_City')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('cities_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

                $city->setImageCity($newFilename);
            }

            $em->persist($city);
            $em->flush();

            return $this->redirectToRoute('app_city', ['worldId' => $worldId]);
        }

        return $this->render('city/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create City',
            'worldId' => $worldId,
        ]);
    }

    #[Route('/city/edit/{id}', name: 'app_city_edit')]
    public function edit(
        Request $request,
        City $city,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $world = $city->getCityWorld();

        $form = $this->createForm(CityType::class, $city, [
            'world' => $world,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $city->getCityFaction()->clear();
            $factions = $form->get('CityFaction')->getData();
            foreach ($factions as $faction) {
                $city->addCityFaction($faction);
            }

            $imageFile = $form->get('Image_City')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('cities_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);

                $city->setImageCity($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_city', ['worldId' => $world->getId()]);
        }

        return $this->render('city/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit City',
            'worldId' => $world->getId(),
        ]);
    }

    #[Route('/city/delete/{id}', name: 'app_city_delete')]
    public function delete(City $city, EntityManagerInterface $em): Response
    {
        $worldId = $city->getCityWorld()->getId();
        $em->remove($city);
        $em->flush();

        return $this->redirectToRoute('app_city', ['worldId' => $worldId]);
    }

    #[Route('/city/show/{id}', name: 'app_city_show')]
    public function show(City $city): Response
    {
        return $this->render('city/show.html.twig', [
            'city' => $city,
        ]);
    }
}
