<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [exerciciosController::class, 'abrirFormExer1']);

Route::post('/exer1resp', [exerciciosController::class, 'respostaExer1']);

Route::get('/exer2', [exerciciosController::class, 'abrirFormExer2']);

Route::post('/exer2resp', [exerciciosController::class, 'respostaExer2']);
