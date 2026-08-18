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

Route::get('/exer6', [exerciciosController::class, 'abrirFormExer6']);

Route::post('/exer6resp', [exerciciosController::class, 'respostaExer6']);

Route::get('/exer7', [exerciciosController::class, 'abrirFormExer7']);

Route::post('/exer7resp', [exerciciosController::class, 'respostaExer7']);

Route::get('/exer8', [exerciciosController::class, 'abrirFormExer8']);

Route::post('/exer8resp', [exerciciosController::class, 'respostaExer8']);

Route::get('/exer9', [exerciciosController::class, 'abrirFormExer9']);

Route::post('/exer9resp', [exerciciosController::class, 'respostaExer9']);

Route::get('/exer10', [exerciciosController::class, 'abrirFormExer10']);

Route::post('/exer10resp', [exerciciosController::class, 'respostaExer10']);

Route::get('/exer11', [exerciciosController::class, 'abrirFormExer11']);

Route::post('/exer11resp', [exerciciosController::class, 'respostaExer11']);

Route::get('/exer12', [exerciciosController::class, 'abrirFormExer12']);

Route::post('/exer12resp', [exerciciosController::class, 'respostaExer12']);

Route::get('/exer13', [exerciciosController::class, 'abrirFormExer13']);

Route::post('/exer13resp', [exerciciosController::class, 'respostaExer13']);

Route::get('/exer14', [exerciciosController::class, 'abrirFormExer14']);

Route::post('/exer14resp', [exerciciosController::class, 'respostaExer14']);

Route::get('/exer15', [exerciciosController::class, 'abrirFormExer15']);

Route::post('/exer15resp', [exerciciosController::class, 'respostaExer15']);

Route::get('/exer16', [exerciciosController::class, 'abrirFormExer16']);

Route::post('/exer16resp', [exerciciosController::class, 'respostaExer16']);

Route::get('/exer17', [exerciciosController::class, 'abrirFormExer17']);

Route::post('/exer17resp', [exerciciosController::class, 'respostaExer17']);

Route::get('/exer18', [exerciciosController::class, 'abrirFormExer18']);

Route::post('/exer18resp', [exerciciosController::class, 'respostaExer18']);

Route::get('/exer19', [exerciciosController::class, 'abrirFormExer19']);

Route::post('/exer19resp', [exerciciosController::class, 'respostaExer19']);

Route::get('/exer20', [exerciciosController::class, 'abrirFormExer20']);

Route::post('/exer20resp', [exerciciosController::class, 'respostaExer20']);
