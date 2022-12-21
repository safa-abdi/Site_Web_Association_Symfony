<?php

namespace App\Repository;

use App\Entity\Electromenagers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Electromenagers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Electromenagers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Electromenagers[]    findAll()
 * @method Electromenagers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElectromenagersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Electromenagers::class);
    }

    // /**
    //  * @return Electromenagers[] Returns an array of Electromenagers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Electromenagers
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
