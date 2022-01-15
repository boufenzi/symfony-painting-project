<?php

namespace App\Repository;

use App\Entity\Painters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Painters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Painters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Painters[]    findAll()
 * @method Painters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaintersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Painters::class);
    }

    // /**
    //  * @return Painters[] Returns an array of Painters objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Painters
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
