<?php

namespace App\Services;

use App\MicroServices\{
    ReadMicroServices,
    CreateOrUpdateMicroServices
};

class PizzasServices
{
    private ReadMicroServices $readMicroServices;
    private CreateOrUpdateMicroServices $createOrUpdateMicroServices;
    public function __construct(ReadMicroServices $readMicroServices, CreateOrUpdateMicroServices $createOrUpdateMicroServices)
    {
        $this->readMicroServices = $readMicroServices;
        $this->createOrUpdateMicroServices = $createOrUpdateMicroServices;
    }
    /**
     * MicroServices
     * TODO
     *  [X] CreateOrUpdate ($id < 0 / $id > 0) (forms return)
     *  [ ] Delete
     *  [ ] Read
     *  [X] ReadAll
     */
}