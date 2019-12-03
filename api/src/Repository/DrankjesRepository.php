<?php

namespace App\Repository;

use App\Entity\Drankjes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Drankjes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Drankjes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Drankjes[]    findAll()
 * @method Drankjes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DrankjesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Drankjes::class);
    }

    // /**
    //  * @return Drankjes[] Returns an array of Drankjes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Drankjes
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
