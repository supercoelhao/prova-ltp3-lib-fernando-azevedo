<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;

Route::resource('autores', AutorController::class)
     ->parameters(['autores' => 'autor'])
     ->except(['show']);

Route::resource('livros', LivroController::class)
     ->except(['show']);
     
Route::get('/', function () {
    return view('welcome');
});

