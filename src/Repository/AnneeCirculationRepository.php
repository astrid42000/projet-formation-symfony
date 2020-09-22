<?php

namespace App\Repository;

use App\Entity\AnneeCirculation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AnneeCirculation|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnneeCirculation|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnneeCirculation[]    findAll()
 * @method AnneeCirculation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnneeCirculationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnneeCirculation::class);
    }

    // /**
    //  * @return AnneeCirculation[] Returns an array of AnneeCirculation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AnneeCirculation
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
