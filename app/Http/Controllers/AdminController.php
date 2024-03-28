<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Función para mostrar el panel de administrador
    public function admin()
    {
        // Aquí puedes agregar la lógica necesaria para el panel de administrador
        return view('admin');
    }

}
