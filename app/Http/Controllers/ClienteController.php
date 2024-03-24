<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente.index');
    }

    public function create()
    {
        return view('cliente.create');
    }

    //
    public function update()
    {
        return view('cliente.update');
    }

    //
    public function remove($cliente)
    {
        return "Estoy eliminado el registro de $cliente, esto ya no existira mas";
    }
}
