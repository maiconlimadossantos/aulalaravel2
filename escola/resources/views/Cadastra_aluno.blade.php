@extends('layout')

@section('content')
<div class="max-w-lg mx-auto mt-10">
    <x-card>
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Cadastrar Aluno</h1>
        
        <form action="{{ route('alunos.resultado') }}" method="POST">
            @csrf
            <x-campo-texto label="Nome do Aluno" name="nome" />
            <x-campo-texto label="Ano de Nascimento" name="ano_nascimento" type="number" />
            <x-campo-texto label="Curso" name="curso" />

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-xl hover:bg-blue-700 transition shadow-lg">
                Calcular e Exibir
            </button>
        </form>
    </x-card>
</div>
@endsection