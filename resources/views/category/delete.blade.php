@extends('layout')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[70vh]">
    <div class="bg-white rounded-lg shadow p-8 mb-6">
        <h1 class="text-2xl font-bold text-red-600 mb-4 text-center">Eliminar Post</h1>
        <p class="text-gray-700 mb-4">¿Estás seguro de que deseas eliminar el post "{{ $post->title }}"?</p>
        <form method="POST" action="{{ route('category.destroy', [$post->id]) }}">
            @csrf
            @method('DELETE')
            <div class="flex justify-end">
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded transition mr-2">
                    Eliminar
                </button>
                <a href="{{ url('/category') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded transition">
                    Cancelar
                </a>
            </div>
        </form>

    </div>
    <div class="max-w-xl w-full bg-white rounded-lg shadow p-8">
        <h2 class="text-3xl font-bold text-blue-700 mb-4">{{ $post->title }}</h2>
        <div class="mb-2">
            <span class="text-gray-700 font-bold">Tipo:</span>
            <span class="text-gray-800">{{ $post->type }}</span>
        </div>
        <div class="mb-2">
            <span class="text-gray-700 font-bold">Autor:</span>
            <span class="text-gray-800">
                @if(isset($post->user))
                {{ $post->user->name }}
                @else
                No disponible
                @endif
            </span>
        </div>
        <div class="mb-2">
            <span class="text-gray-700 font-bold">Fecha de creación:</span>
            <span class="text-gray-800">{{ $post->created_at->format('d/m/Y') }}</span>
        </div>
        <hr class="my-4">
        <div class="text-gray-900 whitespace-pre-line">
            {{ $post->content }}
        </div>
    </div>
</div>
@endsection