<?php

namespace App\Repositories;

use App\Etinia;

class EtiniaRepository extends Repository
{
    public function __construct(Etinia $model)
    {
        $this->model = $model;
    }
}