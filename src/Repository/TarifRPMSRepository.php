<?php

namespace App\Repository;

use App\Entity\TarifRPMS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TarifRPMS>
 *
 * @method TarifRPMS|null find($id, $lockMode = null, $lockVersion = null)
 * @method TarifRPMS|null findOneBy(array $criteria, array $orderBy = null)
 * @method TarifRPMS[]    findAll()
 * @method TarifRPMS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TarifRPMSRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TarifRPMS::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(TarifRPMS $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(TarifRPMS $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return TarifRPMS[] Returns an array of TarifRPMS objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TarifRPMS
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
