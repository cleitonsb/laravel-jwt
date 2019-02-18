<?php

namespace App\Repositories;

use App\Idioma;

class IdiomaRepository extends Repository
{
    public function __construct(Idioma $model)
    {
        $this->model = $model;
    }
}