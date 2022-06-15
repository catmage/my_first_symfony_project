<?php

namespace App\Repository;

use App\Entity\CommercialDepartment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommercialDepartment|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommercialDepartment|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommercialDepartment[]    findAll()
 * @method CommercialDepartment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommercialDepartmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommercialDepartment::class);
    }

    // /**
    //  * @return CommercialDepartment[] Returns an array of CommercialDepartment objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommercialDepartment
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
