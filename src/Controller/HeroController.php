<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Hero;
use App\Entity\World;
use App\Form\HeroType;
use App\Repository\HeroRepository;
use App\Repository\WorldRepository;

final class HeroController extends AbstractController
{
    #[Route('/hero/{worldId}', name: 'app_hero')]
    public function index(int $worldId, HeroRepository $heroRepository, WorldRepository $worldRepo): Response
    {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $heroes = $heroRepository->findBy(['Hero_World' => $world]);

        return $this->render('hero/index.html.twig', [
            'heroes' => $heroes,
            'world' => $world
        ]);
    }

    #[Route('/hero/create/{worldId}', name: 'app_hero_create')]
    public function create(Request $request, EntityManagerInterface $em, WorldRepository $worldRepo, int $worldId, SluggerInterface $slugger): Response
    {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found');
        }

        $hero = new Hero();
        $hero->setHeroWorld($world);

        $form = $this->createForm(HeroType::class, $hero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Hero')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('heroes_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Log or handle the error if needed
                }

                $hero->setImageHero($newFilename);
            }

            $em->persist($hero);
            $em->flush();

            return $this->redirectToRoute('app_hero', ['worldId' => $worldId]);
        }

        return $this->render('hero/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Hero'
        ]);
    }

    #[Route('/hero/edit/{id}', name: 'app_hero_edit')]
    public function edit(Request $request, Hero $hero, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(HeroType::class, $hero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Hero')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('heroes_images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Log or handle the error if needed
                }

                $hero->setImageHero($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_hero', ['worldId' => $hero->getHeroWorld()->getId()]);
        }

        return $this->render('hero/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Hero'
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
