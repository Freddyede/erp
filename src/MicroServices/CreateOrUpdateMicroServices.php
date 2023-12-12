<?php

namespace App\MicroServices;

use App\Abstract\AbstractMicroServices;

class CreateOrUpdateMicroServices extends AbstractMicroServices
{
    public function createOrUpdate(string $entity, int $id, $forms, $formType): array
    {
        if($id < 0)
        {
            $pizzas = new $entity();
        }
        else
        {
            $pizzas = $this->entityManager->getRepository($entity)->find($id);
        }

        return $forms->createForm($formType, $pizzas);
    }
}