<?php

namespace App\Repository;

use App\Entity\GrumpyJellybean;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GrumpyJellybean|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrumpyJellybean|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrumpyJellybean[]    findAll()
 * @method GrumpyJellybean[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrumpyJellybeanRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GrumpyJellybean::class);
    }

    // /**
    //  * @return GrumpyJellybean[] Returns an array of GrumpyJellybean objects
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
    public function findOneBySomeField($value): ?GrumpyJellybean
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
