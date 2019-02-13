<?php

namespace App\Http\Controllers\Api;

use App\Repositories\UsuarioRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{

    protected $usuario;
    /**
     * UsuarioController constructor.
     */
    public function __construct(UsuarioRepository $usuario)
    {
        $this->usuario = $usuario;
    }

    public function index()
    {
        //return $this->usuario->all()->bairro;

        return $this->usuario->findAll();
    }
}
