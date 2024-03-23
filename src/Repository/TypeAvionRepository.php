<?php

namespace App\Repository;

use App\Entity\TypeAvion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeAvion>
 *
 * @method TypeAvion|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeAvion|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeAvion[]    findAll()
 * @method TypeAvion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeAvionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeAvion::class);
    }

//    /**
//     * @return TypeAvion[] Returns an array of TypeAvion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeAvion
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
