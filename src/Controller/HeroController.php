<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HeroController extends AbstractController
{
    #[Route('/world/{worldId}/hero', name: 'app_hero')]
public function index(int $worldId): Response
{
    return $this->render('hero/index.html.twig', [
        'worldId' => $worldId,
    ]);
}

}
