<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        return view('venta.index');
    }

    public function create()
    {
        return view('venta.create');
    }

    //
    public function update()
    {
        return view('venta.update');
    }

    //
    public function remove($venta)
    {
        return "Estoy eliminado el registro de $venta, esto ya no existira mas";
    }
}
