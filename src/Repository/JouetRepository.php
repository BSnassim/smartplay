<?php

namespace App\Repository;

use App\Entity\Jouet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jouet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jouet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jouet[]    findAll()
 * @method Jouet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JouetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jouet::class);
    }
    public function findMaxStock()
    {
        return $this->createQueryBuilder('a')
            ->select('j.des_jouet,MAX(j.qte_stock_jouet) as stock,j.pu_jouet')
            ->from('App\Entity\Jouet','j')
            ->getQuery()
            ->getResult();
    }
    public function findMinPrice()
    {
        return $this->createQueryBuilder('a')
            ->select('MIN(s.pu_jouet) as min')
            ->from('App\Entity\Jouet','s')
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return Jouet[] Returns an array of Jouet objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jouet
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}