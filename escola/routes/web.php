<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;


//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/', [AlunoController::class, 'index'])->name('Cadastra_Aluno');
Route::get('/alunos/create', [AlunoController::class, 'create'])->name('Cadastra_Aluno');
Route::post('/alunos/salvar', [AlunoController::class, 'salvar'])->name('Cadastra_Aluno');