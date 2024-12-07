<?php
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::resource('usuarios', UsuarioController::class);
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');