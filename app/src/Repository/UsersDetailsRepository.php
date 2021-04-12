<?php

namespace App\Repository;

use App\Entity\UsersDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UsersDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersDetails[]    findAll()
 * @method UsersDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsersDetails::class);
    }

    // /**
    //  * @return UsersDetails[] Returns an array of UsersDetails objects
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
    public function findOneBySomeField($value): ?UsersDetails
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
