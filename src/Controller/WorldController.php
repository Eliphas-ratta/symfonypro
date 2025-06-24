<?php

namespace App\Controller;

use App\Entity\World;
use App\Form\WorldType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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

            $world->addUser($user);
            $em->persist($world);
            $em->flush();

            $this->addFlash('success', 'World created successfully!');
            return $this->redirectToRoute('app_world');
        }

        $userWorlds = $user->getWorlds();

        return $this->render('world/index.html.twig', [
            'form' => $form->createView(),
            'userWorlds' => $userWorlds,
        ]);
    }

    #[Route('/world/{id}', name: 'app_world_show')]
    public function show(World $world, SessionInterface $session): Response
    {
        $session->set('current_world_id', $world->getId());

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

    #[Route('/world/{id}/edit', name: 'app_world_edit')]
    public function edit(Request $request, World $world, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createForm(WorldType::class, $world);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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

            $em->flush();

            $this->addFlash('success', 'World updated successfully!');
            return $this->redirectToRoute('app_world');
        }

        return $this->render('world/edit.html.twig', [
            'form' => $form->createView(),
            'world' => $world,
        ]);
    }

    #[Route('/world/{id}/delete', name: 'app_world_delete', methods: ['POST'])]
public function delete(Request $request, World $world, EntityManagerInterface $em): Response
{
    $this->denyAccessUnlessGranted('ROLE_USER');

    if ($this->isCsrfTokenValid('delete'.$world->getId(), $request->request->get('_token'))) {

       

        foreach ($world->getWorldFaction() as $faction) {
            $em->remove($faction);
        }

        foreach ($world->getWorldGuild() as $guild) {
            $em->remove($guild);
        }

        foreach ($world->getWorldCapacity() as $capacity) {
            $em->remove($capacity);
        }

        foreach ($world->getWorldCity() as $city) {
            $em->remove($city);
        }

        foreach ($world->getWorldContinent() as $continent) {
            $em->remove($continent);
        }

        foreach ($world->getWorldHero() as $hero) {
            $em->remove($hero);
        }

        foreach ($world->getWorldDomain() as $domain) {
            $em->remove($domain);
        }

        foreach ($world->getWorldRace() as $race) {
            $em->remove($race);
        }

        
        $em->remove($world);
        $em->flush();

        $this->addFlash('success', 'World deleted successfully!');
    }

    return $this->redirectToRoute('app_world');
}

}
