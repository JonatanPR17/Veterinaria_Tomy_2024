<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        return view('empleado.index');
    }

    public function create()
    {
        return view('empleado.create');
    }

    //
    public function update()
    {
        return view('empleado.update');
    }

    //
    public function remove($empleado)
    {
        return "Estoy eliminado el registro de $empleado, esto ya no existira mas";
    }
}
