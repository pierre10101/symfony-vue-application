<?php

namespace App\Repository;

use App\Entity\Bundle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bundle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bundle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bundle[]    findAll()
 * @method Bundle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BundleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bundle::class);
    }

    /**
    * @return Bundle[] Returns an array of Bundle objects
    */

    public function getAll()
    {
        return (array)$this->createQueryBuilder('b')
        ->orderBy('b.name', 'ASC')
        ->getQuery()
        ->getArrayResult();
    }


    /*
    public function findOneBySomeField($value): ?Bundle
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
