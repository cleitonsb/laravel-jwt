<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UsuarioRequest;
use App\Repositories\UsuarioRepository;
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

    public function show(Product $product)
    {
        return $product;
    }

    public function destroy(Request $request)
    {
        return $this->usuario->delete($request->all());
    }


}
