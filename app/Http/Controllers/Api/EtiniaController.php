<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\EtiniaRepository;

class EtiniaController extends Controller
{
    protected $etinia;

    public function __construct(EtiniaRepository $etinia)
    {
        $this->etinia = $etinia;
    }

    public function index()
    {
        return $this->etinia->findAll();
    }
}
