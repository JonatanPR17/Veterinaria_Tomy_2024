<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        return view('tipoproducto.index');
    }

    public function create()
    {
        return view('tipoproducto.create');
    }

    //
    public function update()
    {
        return view('tipoproducto.update');
    }

    //
    public function remove($tipoproducto)
    {
        return "Estoy eliminado el registro de $tipoproducto, esto ya no existira mas";
    }
}
