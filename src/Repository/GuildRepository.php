<?php

namespace App\Repository;

use App\Entity\Guild;
use App\Entity\World;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Guild>
 */
class GuildRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Guild::class);
    }

    /**
     * Retourne les guildes associées à un monde spécifique (ManyToMany)
     *
     * @param World $world
     * @return Guild[]
     */
    public function findByWorld(World $world): array
    {
        return $this->createQueryBuilder('g')
            ->innerJoin('g.Guild_World', 'w')
            ->andWhere('w = :world')
            ->setParameter('world', $world)
            ->getQuery()
            ->getResult();
    }
}
