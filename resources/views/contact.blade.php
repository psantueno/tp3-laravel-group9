@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
     {{-- Frase célebre --}}
   <div class="text-center mb-12">
    <blockquote class="italic text-gray-600 text-xl">
        “Las matemáticas son una gimnasia del espíritu y una preparación para la filosofía.”<br>
        <span class="block mt-2 text-gray-500 text-base">– Sócrates</span>
    </blockquote>
</div>

    @if (session('success'))
        <div id="successModalOverlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-xl p-6 w-full max-w-md shadow-lg relative">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-green-600">Éxito</h3>
                    <button id="closeModalBtn" class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
                </div>
                <p class="text-gray-700">
                    {{ session('success') }}
                </p>
                <div class="mt-6 text-right">
                    <button id="closeModalFooterBtn" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    @endif

    <h1 class="text-3xl font-semibold text-blue-700 mb-6">Dejá tu comentario</h1>

    {{-- Formulario de contacto --}}
    <form class="space-y-6" action="{{ route('contact.create') }}" method="POST">
        @csrf
        <div>
            <label for="name" class="block text-blue-700 font-medium mb-1">Nombre</label>
            <input type="text" id="username" name="username" placeholder="Tu nombre"
                class="w-full border border-blue-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
            @error('username')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-blue-700 font-medium mb-1">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="ejemplo@correo.com"
                class="w-full border border-blue-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
            @error('email')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="comment" class="block text-blue-700 font-medium mb-1">Comentario</label>
            <textarea id="content" name="content" rows="5" placeholder="Escribí tu comentario..."
                class="w-full border border-blue-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"></textarea>
            @error('content')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md transition duration-200">
            Enviar
        </button>
    </form>

    {{-- Comentarios de ejemplo --}}
    <hr class="my-10 border-t border-gray-300">

    <h3 class="text-2xl font-semibold text-blue-700 mb-6">Comentarios recientes</h3>

    <div class="space-y-4">
        @foreach ($commentaries as $commentary)
            <div class="p-4 bg-gray-100 rounded-md shadow-sm">
                <strong class="text-blue-700">{{ $commentary->username }}</strong>
                <p class="mt-1">{{ $commentary->content }}</p>
                <small class="text-gray-500 block mt-1">{{ $commentary->created_at->diffForHumans() }}</small>
            </div>
        @endforeach
    </div>
</div>
@endsection
