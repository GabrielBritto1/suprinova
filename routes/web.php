<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index')->name('index');
Route::view('quem-somos', 'quem-somos')->name('quem-somos');
Route::view('contato', 'contato')->name('contato');

// ROTA DE SETORES
Route::view('setores/setores', 'setores.setores')->name('setores');
Route::view('setores/setorAlimento', 'setores.setorAlimento')->name('setores.setorAlimento');
