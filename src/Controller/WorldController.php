<?php

namespace App\Controller;

use App\Entity\World;
use App\Form\WorldType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class WorldController extends AbstractController
{
    #[Route('/world', name: 'app_world')]
    public function index(Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $user = $this->getUser();
        $world = new World();

        $form = $this->createForm(WorldType::class, $world);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer l'upload de l'image
            $imageFile = $form->get('Worldimage')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('world_images_directory'),
                        $newFilename
                    );
                    $world->setWorldimage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Image upload failed.');
                }
            }

            // Associer le monde à l'utilisateur
            $world->addUser($user);
            $em->persist($world);
            $em->flush();

            $this->addFlash('success', 'World created successfully!');
            return $this->redirectToRoute('app_world');
        }

        $userWorlds = $user->getUserHasWorld();

        return $this->render('world/index.html.twig', [
            'form' => $form->createView(),
            'userWorlds' => $userWorlds,
        ]);
    }

    #[Route('/world/{id}', name: 'app_world_show')]
    public function show(World $world): Response
    {
        return $this->render('world/show.html.twig', [
            'world' => $world,
            'factions' => $world->getWorldFaction(),
        'heroes' => $world->getWorldHero(),
        'guilds' => $world->getWorldGuild(),
        'races' => $world->getWorldRace(),
        'continents' => $world->getWorldContinent(),
        'domains' => $world->getWorldDomain(),
        'capacities' => $world->getWorldCapacity(),
        ]);
    }
}
