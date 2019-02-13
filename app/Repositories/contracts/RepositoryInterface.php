<?php

namespace App\Repositories\contracts;


interface RepositoryInterface
{
    public function all();

    public function find($id);

    public function findBy($att, $column);
}