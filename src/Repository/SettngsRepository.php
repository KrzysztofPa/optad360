<?php

namespace App\Repository;

use App\Entity\Settngs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Settngs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Settngs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Settngs[]    findAll()
 * @method Settngs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SettngsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Settngs::class);
    }

    // /**
    //  * @return Settngs[] Returns an array of Settngs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Settngs
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
