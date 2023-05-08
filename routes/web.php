<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', function () {

    $nome = 'Davide';

    $links = [
        'prima_pagina',
        'seconda_pagina',
        'terza_pagina',
        'quarta_pagina',
        
    ];

    return view('home', compact('nome', 'links'));
})->name('home');
    


Route::get('/pagina1', function(){

    return view('prima');
})->name('prima_pagina');




Route::get('/pagina2', function(){

    return view('seconda');
})->name('seconda_pagina');
    



Route::get('/pagina3', function(){

    return view('terza');
})->name('terza_pagina');
        



Route::get('/pagina4', function(){

    return view('quarta');
})->name('quarta_pagina');
            