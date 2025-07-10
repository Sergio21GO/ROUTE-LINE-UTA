<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('Bienvenido');

    
});
Route::get('/', [PaginaController::class, 'inicio']);
