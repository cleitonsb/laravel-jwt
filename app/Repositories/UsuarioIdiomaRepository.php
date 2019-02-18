<?php

namespace App\Repositories;

use App\UsuarioIdioma;

class UsuarioIdiomaRepository extends Repository
{
    public function __construct(UsuarioIdioma $model)
    {
        $this->model = $model;
    }
}