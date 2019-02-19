<?php

namespace App\Http\Controllers\Api;

use App\Repositories\BairroRepository;
use App\Http\Controllers\Controller;

class BairroController extends Controller
{
    protected $bairro;

    public function __construct(BairroRepository $bairro)
    {
        $this->bairro = $bairro;
    }

    public function index()
    {
        return $this->bairro->findAll();
    }
}
