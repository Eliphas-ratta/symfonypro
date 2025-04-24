<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GuildController extends AbstractController
{
    #[Route('/world/{worldId}/guilds', name: 'app_guilds')]
public function index(int $worldId): Response
{
    return $this->render('guild/index.html.twig', [
        'worldId' => $worldId,
    ]);
}

}
