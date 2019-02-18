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
}