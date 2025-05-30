<?php

namespace App\Controller;

use App\Entity\Domain;
use App\Form\DomainType;
use App\Repository\DomainRepository;
use App\Repository\WorldRepository;
use App\Service\ImageResizerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class DomainController extends AbstractController
{
    #[Route('/world/{worldId}/domains', name: 'app_domains')]
    public function index(int $worldId, DomainRepository $domainRepo, WorldRepository $worldRepo): Response
    {
        $world = $worldRepo->find($worldId);
        if (!$world) {
            throw $this->createNotFoundException('World not found.');
        }

        $domains = $domainRepo->findBy(['Domain_World' => $world]);

        return $this->render('domain/index.html.twig', [
            'domains' => $domains,
            'world' => $world,
        ]);
    }

    #[Route('/world/{worldId}/domain/create', name: 'app_domain_create')]
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

        $domain = new Domain();
        $domain->setDomainWorld($world);

        $form = $this->createForm(DomainType::class, $domain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Domain')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('domains_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);
                $domain->setImageDomain($newFilename);
            }

            $em->persist($domain);
            $em->flush();

            return $this->redirectToRoute('app_domains', ['worldId' => $worldId]);
        }

        return $this->render('domain/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Create Domain',
            'worldId' => $worldId,
            'domain' => $domain,
        ]);
    }

    #[Route('/domain/edit/{id}', name: 'app_domain_edit')]
    public function edit(
        Request $request,
        Domain $domain,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        ImageResizerService $imageResizer
    ): Response {
        $form = $this->createForm(DomainType::class, $domain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('Image_Domain')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                $targetDir = $this->getParameter('domains_images_directory');
                $imageResizer->resizeAndSave($imageFile, $targetDir, $newFilename);
                $domain->setImageDomain($newFilename);
            }

            $em->flush();

            return $this->redirectToRoute('app_domains', [
                'worldId' => $domain->getDomainWorld()->getId(),
            ]);
        }

        return $this->render('domain/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'Edit Domain',
            'worldId' => $domain->getDomainWorld()->getId(),
            'domain' => $domain,
        ]);
    }

    #[Route('/domain/delete/{id}', name: 'app_domain_delete')]
    public function delete(Domain $domain, EntityManagerInterface $em): Response
    {
        $worldId = $domain->getDomainWorld()->getId();

        $em->remove($domain);
        $em->flush();

        return $this->redirectToRoute('app_domains', [
            'worldId' => $worldId,
        ]);
    }

    #[Route('/domain/show/{id}', name: 'app_domain_show')]
    public function show(Domain $domain): Response
    {
        return $this->render('domain/show.html.twig', [
            'domain' => $domain,
        ]);
    }
}
