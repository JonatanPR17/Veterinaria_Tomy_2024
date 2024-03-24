<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
    public function index()
    {
        return view('tipopago.index');
    }

    public function create()
    {
        return view('tipopago.create');
    }

    //
    public function update()
    {
        return view('tipopago.update');
    }

    //
    public function remove($tipopago)
    {
        return "Estoy eliminado el registro de $tipopago, esto ya no existira mas";
    }
}
