<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return view('producto.index');
    }

    public function create()
    {
        return view('producto.create');
    }

    //
    public function update()
    {
        return view('producto.update');
    }

    //
    public function remove($producto)
    {
        return "Estoy eliminado el registro de $producto, esto ya no existira mas";
    }
}
