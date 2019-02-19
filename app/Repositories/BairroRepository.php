<?php

namespace App\Repositories;

use App\Bairro;

class BairroRepository extends Repository
{
    public function __construct(Bairro $model)
    {
        $this->model = $model;
    }
}