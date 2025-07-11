<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/punto1', function () {
    return view('punto1');
});

Route::get('/punto2', function () {
    return view('punto2');
});

Route::get('/punto3', function () {
    return view('punto3');
});

Route::get('/punto4', function () {
    return view('punto4');
});

Route::get('/punto5', function () {
    return view('punto5');
});

Route::get('/punto6', function () {
    return view('punto6');
});




