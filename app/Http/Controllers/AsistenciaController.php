<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        return view('asistencia.index');
    }

    public function create()
    {
        return view('asistencia.create');
    }

    public function update()
    {
        return view('asistencia.update');
    }

    
    public function updateprivate($asistencia)
    {
        return view('asistencia.updateprivate', compact ('asistencia'));
    }

    
    public function remove($asistencia)
    {
        return "Estoy eliminado el registro de $asistencia, esto ya no existira mas";
    }
}
