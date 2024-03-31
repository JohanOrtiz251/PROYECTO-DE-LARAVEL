<?php

// web.php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GerenteController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::group(['middleware' => 'web'], function () {
    Route::post('/', 'Auth\LoginController@login')->name('login');
});

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('dashboard');
    Route::get('/recolectar', [AdminController::class, 'recolectas'])->name('recolectas');
    Route::post('/store', [AdminController::class,'crear'])->name('crearr');
    Route::get('/recolectas', [AdminController::class,'mostrar'])->name('mostrarr');
    Route::get('/edit/{recolecta}', [AdminController::class,'edit'])->name('edit');
    Route::put('/update/{recolecta}', [AdminController::class,'update'])->name('update');
    Route::delete('/delete/{recolecta}', [AdminController::class, 'destroy'])->name('delete');



    
});


Route::group(['middleware' => ['auth', 'role:gerente'], 'prefix' => 'gerente', 'as' => 'gerente.'], function () {
    Route::get('/dashboard', [GerenteController::class, 'index'])->name('dashboard');
});

Auth::routes();


Route::get('/ingresar-empleado', function () {
    return view('vistas_admin.ingresar_empleado');
})->name('ingresar_empleado');
