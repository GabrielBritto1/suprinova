<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');
Route::view('quem-somos', 'quem-somos')->name('quem-somos');

// ROTA DE SETORES
Route::view('setores/setores', 'setores.setores')->name('setores');