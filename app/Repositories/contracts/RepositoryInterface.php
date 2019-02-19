<?php

namespace App\Repositories\contracts;


interface RepositoryInterface
{
    public function findAll();

    public function find($id);

    public function findBy($column, $operator, $value);
}