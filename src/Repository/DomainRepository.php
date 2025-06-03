<?php

namespace App\Repository;

use App\Entity\Domain;
use App\Entity\World;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Domain>
 */
class DomainRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Domain::class);
    }

    /**
     * Récupère les domaines filtrés par nom et races associées dans un monde donné.
     *
     * @param array|null $filters Données du formulaire (name et races)
     * @param World $world Monde courant
     * @return Domain[]
     */
   public function findFilteredDomains(?array $filters, World $world): array
{
    $qb = $this->createQueryBuilder('d')
        ->leftJoin('d.Domain_Race', 'r')
        ->addSelect('r')
        ->where('d.Domain_World = :world')
        ->setParameter('world', $world);

    if (!empty($filters['name'])) {
        $qb->andWhere('LOWER(d.Name) LIKE :name')
           ->setParameter('name', '%' . strtolower($filters['name']) . '%');
    }

    if (!empty($filters['races'])) {
        $qb->andWhere('r = :race')
           ->setParameter('race', $filters['races']);
    }

    return $qb->getQuery()->getResult();
}

}
