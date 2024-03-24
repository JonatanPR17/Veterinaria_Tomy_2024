<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    public function index()
    {
        return view('tipodocuemnto.index');
    }

    public function create()
    {
        return view('tipodocuemnto.create');
    }

    //
    public function update()
    {
        return view('tipodocuemnto.update');
    }

    //
    public function remove($tipodocuemnto)
    {
        return "Estoy eliminado el registro de $tipodocuemnto, esto ya no existira mas";
    }
}
