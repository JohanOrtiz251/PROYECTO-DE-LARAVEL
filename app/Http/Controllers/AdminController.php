<?php

namespace App\Http\Controllers;

use App\Models\Recolectas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Función para mostrar el panel de administrador
    public function admin()
    {
        // Aquí puedes agregar la lógica necesaria para el panel de administrador
        return view('admin');
    }

    public function recolectas()
    {
        return view('adminrecolec');
    }

    public function mostrar()
    {
        $recolectas = Recolectas::all(); // Obtener todas las recolectas
        return view('adminmostrareco', compact('recolectas'));
    }


    public function crear(Request $request)
    {
        Recolectas::create($request->all());
        return redirect()->route('admin.mostrarr');
    }

    public function edit(Recolectas $recolecta)
    {
        return view('admineditrecolec', compact('recolecta'));
    }

    public function update(Request $request, Recolectas $recolecta)
    {

        $recolecta->update($request->all());
        return redirect()->route('admin.mostrarr');
    }

    public function destroy(Recolectas $recolecta)
    {
        $recolecta->delete();
        return redirect()->route('admin.mostrarr')->with('success', 'Recolecta eliminada exitosamente');
    }
}
