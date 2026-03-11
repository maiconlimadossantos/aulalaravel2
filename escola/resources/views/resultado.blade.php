@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="bg-blue-800 text-white py-8 mb-10 shadow-md">
        <h1 class="text-5xl font-black text-center uppercase tracking-tighter">
            {{ $curso }}
        </h1>
    </div>

    <div class="max-w-4xl mx-auto px-4">
        <x-card>
            <div class="text-center mb-8">
                <p class="text-gray-500 text-lg">Idade calculada:</p>
                <span class="text-4xl font-bold text-blue-600">{{ $idade }} anos</span>
            </div>

            <hr class="mb-8 border-gray-100">

            <div class="flex flex-wrap gap-4 justify-center">
                @for ($i = 0; $i < $idade; $i++)
                    <span class="{{ $isPrimo ? 'font-black text-4xl text-red-600 uppercase' : 'text-gray-700 text-base' }}">
                        {{ $nome }}
                    </span>
                @endfor
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('alunos.form') }}" class="text-blue-500 hover:underline">← Voltar ao formulário</a>
            </div>
        </x-card>
    </div>
</div>
@endsection