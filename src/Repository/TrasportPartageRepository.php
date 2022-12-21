<?php

namespace App\Repository;

use App\Entity\TrasportPartage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TrasportPartage|null find($id, $lockMode = null, $lockVersion = null)
 * @method TrasportPartage|null findOneBy(array $criteria, array $orderBy = null)
 * @method TrasportPartage[]    findAll()
 * @method TrasportPartage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrasportPartageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TrasportPartage::class);
    }

    // /**
    //  * @return TrasportPartage[] Returns an array of TrasportPartage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TrasportPartage
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
