<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        return view('cargo.index');
    }

    public function create()
    {
        return view('cargo.create');
    }

    //
    public function update()
    {
        return view('cargo.update');
    }

    //
    public function remove($cargo)
    {
        return "Estoy eliminado el registro de $cargo, esto ya no existira mas";
    }
}
