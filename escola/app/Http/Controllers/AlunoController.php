<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AlunoController extends Controller
{
    public function processar(Request $request)
    {
        $nome = $request->input('nome');
        $anoNascimento = $request->input('ano_nascimento');
        $curso = $request->input('curso');

        // Cálculo da idade em 2026
        $idade = 2026 - $anoNascimento;

        // Verificação de número primo
        $isPrimo = $this->verificarSeEhPrimo($idade);

        return view('alunos.resultado', compact('nome', 'idade', 'curso', 'isPrimo'));
    }

    private function verificarSeEhPrimo($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }
}
