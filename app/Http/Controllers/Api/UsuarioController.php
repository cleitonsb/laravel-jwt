<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UsuarioRequest;
use App\Repositories\UsuarioRepository;
use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{

    protected $usuario;

    public function __construct(UsuarioRepository $usuario)
    {
        $this->usuario = $usuario;
    }

    public function index()
    {
        return $this->usuario->findAll();
    }

    public function store(UsuarioRequest $request)
    {
        return $this->usuario->create($request->all());
    }

    public function update(UsuarioRequest $request)
    {
        return $this->usuario->update($request->all());
    }

    public function show(Usuario $usuario)
    {
        return $this->usuario->find($usuario);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
    }


}
