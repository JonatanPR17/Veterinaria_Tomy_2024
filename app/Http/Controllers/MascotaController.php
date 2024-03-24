<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        return view('mascota.index');
    }

    public function create()
    {
        return view('mascota.create');
    }

    //
    public function update()
    {
        return view('mascota.update');
    }

    //
    public function remove($mascota)
    {
        return "Estoy eliminado el registro de $mascota, esto ya no existira mas";
    }
}
