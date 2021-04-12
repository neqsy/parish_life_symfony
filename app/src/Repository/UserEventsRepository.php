<?php

namespace App\Repository;

use App\Entity\UserEvents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserEvents|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserEvents|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserEvents[]    findAll()
 * @method UserEvents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserEventsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserEvents::class);
    }

    // /**
    //  * @return UserEvents[] Returns an array of UserEvents objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserEvents
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
