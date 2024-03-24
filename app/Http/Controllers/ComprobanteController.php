<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComprobanteController extends Controller
{
    public function index()
    {
        return view('comprobante.index');
    }

    public function create()
    {
        return view('comprobante.create');
    }

    //
    public function update()
    {
        return view('comprobante.update');
    }

    //
    public function remove($comprobante)
    {
        return "Estoy eliminado el registro de $comprobante, esto ya no existira mas";
    }
}
