<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function index()
    {
        return view('sucursal.index');
    }

    public function create()
    {
        return view('sucursal.create');
    }

    //
    public function update()
    {
        return view('sucursal.update');
    }

    //
    public function remove($sucursal)
    {
        return "Estoy eliminado el registro de $sucursal, esto ya no existira mas";
    }
}
