<?php

// LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/'; // Redirigir por defecto al home

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Redirigir al dashboard de admin
        } elseif ($user->role === 'gerente') {
            return redirect()->route('gerente.dashboard'); // Redirigir al dashboard de gerente
        } else {
            // Si el usuario no tiene un rol definido, redirigir a una ruta predeterminada
           
        }
    }

    public function logout(Request $request)
    {
        // Destruir la sesión actual
        $request->session()->invalidate();

        // Iniciar una nueva sesión
        $request->session()->regenerate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
