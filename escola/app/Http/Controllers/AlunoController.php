<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class AlunoController extends Controller
{
    public function index(){
        return view('Cadastra_Aluno');
    }
    public function create(){
        return view('Cadastra_Aluno');
    }
    public function salvar(Request $request){
        $nome = $request->input('nome');
        $email = $request->input('email');
        $data_nascimento = $request->input('data_nascimento');

        return redirect()->route('Cadastra_aluno')->with('success', 'Aluno cadastrado com sucesso!');
    }
}
