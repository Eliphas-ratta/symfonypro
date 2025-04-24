<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContinentController extends AbstractController
{
    #[Route('/world/{worldId}/continents', name: 'app_continents')]
public function index(int $worldId): Response
{
    return $this->render('continent/index.html.twig', [
        'worldId' => $worldId,
    ]);
}

}
