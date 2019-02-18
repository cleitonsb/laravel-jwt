<?php

namespace App\Http\Controllers\Api;

use App\Repositories\IdiomaRepository;
use App\Http\Controllers\Controller;

class IdiomaController extends Controller
{

    protected $idioma;

    public function __construct(IdiomaRepository $idioma)
    {
        $this->idioma = $idioma;
    }

    public function index()
    {
        return $this->idioma->all();
    }
}
