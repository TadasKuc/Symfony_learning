<?php

namespace App\Manager;

use App\Entity\Car;
use Doctrine\ORM\EntityManagerInterface;

class CarManager
{

    public function __construct(private EntityManagerInterface $em)
    {
    }

    public function store(Car $car):void
    {
        $this->em->persist($car);
        $this->em->flush();
    }

    public function delete(Car $car)
    {
        $this->em->remove($car);
        $this->em->flush();
    }

}