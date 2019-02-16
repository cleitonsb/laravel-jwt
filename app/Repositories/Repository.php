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

    public function find($co_usuario)
    {
        return $this->model->find($co_usuario);
    }

    public function findBy($column, $operator, $value)
    {
        return $this->model->where($column, $operator, $value)->get();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($data)
    {
        return $this->model->update($data);
    }

    public function delete($data)
    {
        return $this->model->delete($data);
    }
}