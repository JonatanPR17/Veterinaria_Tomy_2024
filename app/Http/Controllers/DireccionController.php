<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function index()
    {
        return view('direccion.index');
    }

    public function create()
    {
        return view('direccion.create');
    }

    //
    public function update()
    {
        return view('direccion.update');
    }

    //
    public function remove($direccion)
    {
        return "Estoy eliminado el registro de $direccion, esto ya no existira mas";
    }
}
