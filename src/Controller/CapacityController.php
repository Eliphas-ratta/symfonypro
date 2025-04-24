<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CapacityController extends AbstractController
{
    #[Route('/world/{worldId}/capacities', name: 'app_capacities')]
public function index(int $worldId): Response
{
    return $this->render('capacity/index.html.twig', [
        'worldId' => $worldId,
    ]);
}

}
