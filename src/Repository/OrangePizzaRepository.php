<?php

namespace App\Repository;

use App\Entity\OrangePizza;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OrangePizza|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrangePizza|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrangePizza[]    findAll()
 * @method OrangePizza[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrangePizzaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OrangePizza::class);
    }

    // /**
    //  * @return OrangePizza[] Returns an array of OrangePizza objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OrangePizza
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
