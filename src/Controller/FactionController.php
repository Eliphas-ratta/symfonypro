<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FactionController extends AbstractController
{
    #[Route('/world/{worldId}/factions', name: 'app_factions')]
    public function index(int $worldId): Response
    {
        return $this->render('faction/index.html.twig', [
            'controller_name' => 'FactionController',
            'worldId' => $worldId,
        ]);
    }
}
