<?php

namespace App\MicroServices;

use App\Abstract\AbstractMicroServices;

class ReadMicroServices extends AbstractMicroServices
{
    public function findAllDatas(string $entity): array
    {
        return $this->entityManager->getRepository($entity)->findAll();
    }
}