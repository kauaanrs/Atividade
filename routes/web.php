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

Route::get('/exer3', [exerciciosController::class, 'abrirFormExer3']);

Route::post('/exer3resp', [exerciciosController::class, 'respostaExer3']);

Route::get('/exer4', [exerciciosController::class, 'abrirFormExer4']);

Route::post('/exer4resp', [exerciciosController::class, 'respostaExer4']);

Route::get('/exer5', [exerciciosController::class, 'abrirFormExer5']);

Route::post('/exer5resp', [exerciciosController::class, 'respostaExer5']);
