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
    public function calcularIdade($data_nascimento) {
        $data_nascimento = new \DateTime($data_nascimento);
        $data_atual = new \DateTime();
        $idade = $data_atual->diff($data_nascimento)->y;
        return $idade;
    }

    public function isPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    public function exibirAluno(Request $request) {
        $nome = $request->input('nome');
        $data_nascimento = $request->input('data_nascimento');
        $idade = $this->calcularIdade($data_nascimento);
        $isPrimo = $this->isPrimo($idade);

        return view('exibir_aluno', compact('nome', 'idade', 'isPrimo'));
    }
}

//O nome do curso em caixa alta (maiúsculas), centralizado e com destaque no topo
//da página.
///- A idade calculada do aluno.
//- O nome do aluno repetido X vezes, onde X é a sua idade calculada.
//- Regra Especial: Caso a idade do usuário seja um número primo, esses nomes
//repetidos devem aparecer obrigatoriamente formatados em negrito e com fonte
//grande.