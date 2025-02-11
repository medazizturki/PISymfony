<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenement>
 *
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    public function save(Evenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Evenement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Evenement[] Returns an array of Evenement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Evenement
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


public function SortBynomEvent(){
    return $this->createQueryBuilder('e')
        ->orderBy('e.nomEvent','ASC')
        ->getQuery()
        ->getResult()
        ;
}

public function SortBytypeEvent()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.typeEvent','ASC')
        ->getQuery()
        ->getResult()
        ;
}


public function SortBydate()
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.date','ASC')
        ->getQuery()
        ->getResult()
        ;
}








public function findBynomEvent( $nomEvent)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.nomEvent LIKE :nomEvent')
        ->setParameter('nomEvent','%' .$nomEvent. '%')
        ->getQuery()
        ->execute();
}
public function findBytypeEvent( $typeEvent)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.typeEvent LIKE :typeEvent')
        ->setParameter('typeEvent','%' .$typeEvent. '%')
        ->getQuery()
        ->execute();
}
public function findBydate( $date)
{
    return $this-> createQueryBuilder('e')
        ->andWhere('e.date LIKE :date')
        ->setParameter('date','%' .$date. '%')
        ->getQuery()
        ->execute();
}



}
