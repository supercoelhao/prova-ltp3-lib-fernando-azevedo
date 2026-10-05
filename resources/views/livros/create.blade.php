@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Cadastrar Novo Livro</h1>

    <form action="{{ route('livros.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf

        <!-- Campo Título -->
        <div class="mb-4">
            <label for="titulo" class="block text-gray-700 font-medium mb-2">Título</label>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" class="w-full rounded border px-3 py-2">
            @error('titulo')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo Ano de Publicação -->
        <div class="mb-4">
            <label for="ano_publicacao" class="block text-gray-700 font-medium mb-2">Ano de Publicação</label>
            <input type="number" name="ano_publicacao" id="ano_publicacao" value="{{ old('ano_publicacao') }}" class="w-full rounded border px-3 py-2">
            @error('ano_publicacao')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo ISBN -->
        <div class="mb-4">
            <label for="isbn" class="block text-gray-700 font-medium mb-2">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{ old('isbn') }}" class="w-full rounded border px-3 py-2">
            @error('isbn')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Campo Autor (Select Dropdown) -->
        <div class="mb-6">
            <label for="autor_id" class="block text-gray-700 font-medium mb-2">Autor</label>
            <select name="autor_id" id="autor_id" class="w-full rounded border px-3 py-2">
                <option value="">Selecione um autor...</option>
                @foreach($autores as $autor)
                    <option value="{{ $autor->id }}" {{ old('autor_id') == $autor->id ? 'selected' : '' }}>
                        {{ $autor->nome }}
                    </option>
                @endforeach
            </select>
            @error('autor_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botões -->
        <div class="flex items-center gap-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Salvar Livro</button>
            <a href="{{ route('livros.index') }}" class="text-gray-500 hover:underline">Voltar para a lista</a>
        </div>
    </form>
</div>
@endsection