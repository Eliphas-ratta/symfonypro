<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DomainController extends AbstractController
{
    #[Route('/world/{worldId}/domains', name: 'app_domains')]
public function index(int $worldId): Response
{
    return $this->render('domain/index.html.twig', [
        'worldId' => $worldId,
    ]);
}

}
