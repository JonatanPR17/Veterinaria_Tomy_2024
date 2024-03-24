<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedor.index');
    }

    public function create()
    {
        return view('proveedor.create');
    }

    //
    public function update()
    {
        return view('proveedor.update');
    }

    //
    public function remove($proveedor)
    {
        return "Estoy eliminado el registro de $proveedor, esto ya no existira mas";
    }
}
