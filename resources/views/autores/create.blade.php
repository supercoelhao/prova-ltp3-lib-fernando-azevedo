@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Cadastrar Novo Autor</h1>

    <form action="{{ route('autores.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf

        <div class="mb-4">
            <label for="nome" class="block text-gray-700 font-medium mb-2">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" class="w-full rounded border px-3 py-2">
            @error('nome')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="nacionalidade" class="block text-gray-700 font-medium mb-2">Nacionalidade</label>
            <input type="text" name="nacionalidade" id="nacionalidade" value="{{ old('nacionalidade') }}" class="w-full rounded border px-3 py-2">
            @error('nacionalidade')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Salvar Autor</button>
            <a href="{{ route('autores.index') }}" class="text-gray-500 hover:underline">Voltar para a lista</a>
        </div>
    </form>
</div>
@endsection