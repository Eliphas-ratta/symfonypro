<?php

namespace App\Repository;

use App\Entity\Capacity;
use App\Entity\World;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Capacity>
 */
class CapacityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Capacity::class);
    }

    /**
     * Retourne les capacités filtrées par nom et domaine, pour un monde donné.
     *
     * @param array $filters
     * @param World $world
     * @return Capacity[]
     */
    public function findFilteredCapacities(array $filters, World $world): array
    {
        $qb = $this->createQueryBuilder('c')
            ->leftJoin('c.Domain', 'd')
            ->addSelect('d')
            ->where('c.Capacity_world = :world')
            ->setParameter('world', $world);

        if (!empty($filters['name'])) {
            $qb->andWhere('LOWER(c.Name) LIKE :name')
               ->setParameter('name', '%' . strtolower($filters['name']) . '%');
        }

        if (!empty($filters['domains'])) {
            // Utilisation de MEMBER OF pour ManyToMany
            $qb->andWhere(':domain MEMBER OF c.Domain')
               ->setParameter('domain', $filters['domains']);
        }

        return $qb->getQuery()->getResult();
    }
}
