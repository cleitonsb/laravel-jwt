<?php

namespace App\Repositories\contracts;


interface RepositoryInterface
{
    public function all();

    public function find($id);

    public function findBy($column, $operator, $value);
}