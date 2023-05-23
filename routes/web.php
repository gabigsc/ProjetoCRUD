<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentosController;


Route::get('/', function () {
    return view('index');
})->name('index');

// Rota para enviar um método para o AgendamentosController para fazer o método post
Route::post('/cadastrar', [AgendamentosController::class, 'store'])->name('agendamentos.store');

Route::get('/consulta', [AgendamentosController::class, 'show'])->name('agendamentos.show');