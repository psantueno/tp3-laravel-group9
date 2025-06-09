@extends('layout')

@section('content')
<div class="flex items-center justify-center min-h-[70vh]">
    <div class="max-w-lg w-full bg-white rounded-lg shadow p-8">
        <h1 class="text-2xl font-bold text-blue-700 mb-6">EDITAR POST</h1>
        <form method="POST" action="{{ route('posts.update',[$post->id]) }}">
            @csrf
            @method('PUT')
            <!-- Título -->
            <div>
                <label for="title" class="block text-gray-700 font-bold mb-1">Título</label>
                <input id="title" name="title" type="text" class="block w-full border-gray-300 rounded mt-1" value="{{ $post->title }}" required autofocus>
                @error('title')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tipo de post -->
            <div class="mt-4">
                <label for="type" class="block text-gray-700 font-bold mb-1">Tipo de post</label>
                <select id="type" name="type" class="block w-full border-gray-300 rounded mt-1" required>
                    <option value="">Seleccioná una opción</option>
                    <option value="Ejercicio" {{ $post->type == 'Ejercicio' ? 'selected' : '' }}>Ejercicio</option>
                    <option value="Artículo" {{ $post->type == 'Artículo' ? 'selected' : '' }}>Artículo</option>
                    <option value="Curiosidad" {{ $post->type == 'Curiosidad' ? 'selected' : '' }}>Curiosidad</option>
                    <option value="Recurso" {{ $post->type == 'Recurso' ? 'selected' : '' }}>Recurso</option>
                    <option value="Idea" {{ $post->type == 'Idea' ? 'selected' : '' }}>Idea</option>
                </select>
                @error('type')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Contenido -->
            <div class="mt-4">
                <label for="content" class="block text-gray-700 font-bold mb-1">Contenido</label>
                <textarea id="content" name="content" rows="5" class="block w-full border-gray-300 rounded mt-1" required>{{ $post->content }}</textarea>
                @error('content')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Habilitado -->
            <div class="mt-4">
                <label for="habilitated" class="block text-gray-700 font-bold mb-1">¿Habilitado?</label>
                <select id="habilitated" name="habilitated" class="block w-full border-gray-300 rounded mt-1" required>
                    <option value="1" {{ $post->habilitated == '1' ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ $post->habilitated == '0' ? 'selected' : '' }}>No</option>
                </select>
                @error('habilitated')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex justify-end mt-6 gap-2">
                <button type="button" onclick="window.history.back();" class="bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-6 rounded transition">
                    Cancelar
                </button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded transition">
                    Confirmar edición
                </button>
            </div>
        </form>
    </div>
</div>
@endsection