<?php

namespace App\Repository;

use App\Entity\HotelerieEtHebergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HotelerieEtHebergement>
 *
 * @method HotelerieEtHebergement|null find($id, $lockMode = null, $lockVersion = null)
 * @method HotelerieEtHebergement|null findOneBy(array $criteria, array $orderBy = null)
 * @method HotelerieEtHebergement[]    findAll()
 * @method HotelerieEtHebergement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotelerieEtHebergementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HotelerieEtHebergement::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(HotelerieEtHebergement $entity, bool $flush = true): void
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
    public function remove(HotelerieEtHebergement $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return HotelerieEtHebergement[] Returns an array of HotelerieEtHebergement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HotelerieEtHebergement
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
