@extends('layout')

@section('content')
<div class="flex items-center justify-center min-h-[70vh]">
    <div class="max-w-xl w-full bg-white rounded-lg shadow p-8">
        <h1 class="text-3xl font-bold text-blue-700 mb-4">{{ $post->title }}</h1>
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
        <div class="mt-6">
            <a href="{{ url()->previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-6 rounded transition inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                Volver
            </a>
        </div>
    </div>
</div>
@endsection