<?php

namespace App\Repository;

use App\Entity\CinemaEtCentreCuturel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CinemaEtCentreCuturel>
 *
 * @method CinemaEtCentreCuturel|null find($id, $lockMode = null, $lockVersion = null)
 * @method CinemaEtCentreCuturel|null findOneBy(array $criteria, array $orderBy = null)
 * @method CinemaEtCentreCuturel[]    findAll()
 * @method CinemaEtCentreCuturel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CinemaEtCentreCuturelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CinemaEtCentreCuturel::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(CinemaEtCentreCuturel $entity, bool $flush = true): void
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
    public function remove(CinemaEtCentreCuturel $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return CinemaEtCentreCuturel[] Returns an array of CinemaEtCentreCuturel objects
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
    public function findOneBySomeField($value): ?CinemaEtCentreCuturel
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
