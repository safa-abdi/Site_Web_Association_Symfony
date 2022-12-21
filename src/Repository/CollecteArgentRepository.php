<?php

namespace App\Repository;

use App\Entity\CollecteArgent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CollecteArgent|null find($id, $lockMode = null, $lockVersion = null)
 * @method CollecteArgent|null findOneBy(array $criteria, array $orderBy = null)
 * @method CollecteArgent[]    findAll()
 * @method CollecteArgent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollecteArgentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CollecteArgent::class);
    }

    // /**
    //  * @return CollecteArgent[] Returns an array of CollecteArgent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CollecteArgent
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
