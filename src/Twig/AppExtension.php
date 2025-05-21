<?php

namespace App\Twig;

use App\Repository\WorldRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private RequestStack $requestStack;
    private WorldRepository $worldRepository;

    public function __construct(RequestStack $requestStack, WorldRepository $worldRepository)
    {
        $this->requestStack = $requestStack;
        $this->worldRepository = $worldRepository;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('current_world', [$this, 'getCurrentWorld']),
        ];
    }

    public function getCurrentWorld(): ?\App\Entity\World
    {
        $session = $this->requestStack->getSession();
        $worldId = $session->get('current_world_id');

        if (!$worldId) {
            return null;
        }

        return $this->worldRepository->find($worldId);
    }
}
