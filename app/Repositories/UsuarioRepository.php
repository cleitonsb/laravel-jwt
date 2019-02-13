<?php

namespace App\Repositories;


use App\Usuario;

class UsuarioRepository extends Repository
{
    public function __construct(Usuario $model)
    {
        $this->model = $model;
    }

    public function findAll()
    {
        return $this->model->with('bairro')->where('deleted_at','=', null)->get();
    }
}