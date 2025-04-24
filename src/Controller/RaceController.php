<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RaceController extends AbstractController
{
    #[Route('/world/{worldId}/races', name: 'app_races')]
public function index(int $worldId): Response
{
    return $this->render('race/index.html.twig', [
        'worldId' => $worldId,
    ]);
}

}
