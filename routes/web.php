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
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('dashboard'); // Corregir el nombre de la ruta a 'dashboard'
});


Route::group(['middleware' => ['auth', 'role:gerente'], 'prefix' => 'gerente', 'as' => 'gerente.'], function () {
    Route::get('/dashboard', [GerenteController::class, 'index'])->name('dashboard');
});

Auth::routes();


