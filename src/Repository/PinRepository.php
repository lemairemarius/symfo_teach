<?php

namespace App\Repository;

use App\Entity\Pin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pin[]    findAll()
 * @method Pin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pin::class);
    }


}