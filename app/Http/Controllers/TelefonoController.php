<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    public function index()
    {
        return view('telefono.index');
    }

    public function create()
    {
        return view('telefono.create');
    }

    //
    public function update()
    {
        return view('telefono.update');
    }

    //
    public function remove($telefono)
    {
        return "Estoy eliminado el registro de $telefono, esto ya no existira mas";
    }
}
