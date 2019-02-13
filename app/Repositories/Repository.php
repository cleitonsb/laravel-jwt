<?php

namespace App\Repositories;


use App\Repositories\contracts\RepositoryInterface;

class Repository implements RepositoryInterface
{
    protected $model;

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findBy($att, $column)
    {
        //return $this->model->where($att, $column);
        return $this->model->where('deleted_at','=', null)->get();
    }
}