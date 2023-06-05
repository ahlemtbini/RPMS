<?php

namespace App\Repository;

use App\Entity\JournalistesEtMedias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<JournalistesEtMedias>
 *
 * @method JournalistesEtMedias|null find($id, $lockMode = null, $lockVersion = null)
 * @method JournalistesEtMedias|null findOneBy(array $criteria, array $orderBy = null)
 * @method JournalistesEtMedias[]    findAll()
 * @method JournalistesEtMedias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JournalistesEtMediasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JournalistesEtMedias::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(JournalistesEtMedias $entity, bool $flush = true): void
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
    public function remove(JournalistesEtMedias $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return JournalistesEtMedias[] Returns an array of JournalistesEtMedias objects
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
    public function findOneBySomeField($value): ?JournalistesEtMedias
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
