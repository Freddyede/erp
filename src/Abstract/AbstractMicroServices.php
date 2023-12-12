<?php

namespace App\Abstract;

use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractMicroServices
{
    protected EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
}