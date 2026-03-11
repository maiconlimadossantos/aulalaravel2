<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

Route::get('/aluno/cadastrar', function () {
    return view('alunos.form');
})->name('alunos.form');

Route::post('/aluno/resultado', [AlunoController::class, 'processar'])->name('alunos.resultado');