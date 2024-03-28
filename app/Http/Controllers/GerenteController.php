<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteController extends Controller
{
    // Función para mostrar el panel de gerente
    public function index()
    {
        // Aquí puedes agregar la lógica necesaria para el panel de gerente
        return view('gerente');
    }
}
