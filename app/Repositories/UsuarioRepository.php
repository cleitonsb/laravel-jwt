<?php

namespace App\Repositories;


use App\Usuario;

class UsuarioRepository extends Repository
{
    public function __construct(Usuario $model)
    {
        $this->model = $model;
    }

    public function find($usuario)
    {
        return $this->model->with('bairro', 'idioma')->where('co_usuario','=', $usuario['co_usuario'])->get();
    }

    public function findAll()
    {
        return $this->model->with('bairro', 'idioma')->where('deleted_at','=', null)->get();
    }

    public function create($data)
    {
        $usuario = $this->model->create($data);

        foreach ($data['idioma'] as $key => $value) {
            $usuario->idioma()->attach($value);
        }

        return $usuario;
    }
}