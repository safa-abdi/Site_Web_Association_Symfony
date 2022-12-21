<?php

namespace App\Repository;

use App\Entity\GensBesoins;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GensBesoins|null find($id, $lockMode = null, $lockVersion = null)
 * @method GensBesoins|null findOneBy(array $criteria, array $orderBy = null)
 * @method GensBesoins[]    findAll()
 * @method GensBesoins[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GensBesoinsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GensBesoins::class);
    }

    // /**
    //  * @return GensBesoins[] Returns an array of GensBesoins objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GensBesoins
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
