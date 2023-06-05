<?php

namespace App\Repository;

use App\Entity\AgenceDeCommunicationRp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AgenceDeCommunicationRp>
 *
 * @method AgenceDeCommunicationRp|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgenceDeCommunicationRp|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgenceDeCommunicationRp[]    findAll()
 * @method AgenceDeCommunicationRp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgenceDeCommunicationRpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AgenceDeCommunicationRp::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(AgenceDeCommunicationRp $entity, bool $flush = true): void
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
    public function remove(AgenceDeCommunicationRp $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return AgenceDeCommunicationRp[] Returns an array of AgenceDeCommunicationRp objects
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
    public function findOneBySomeField($value): ?AgenceDeCommunicationRp
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
