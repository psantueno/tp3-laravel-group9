@extends('layouts')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
     {{-- Frase célebre --}}
   <div class="text-center mb-12">
    <blockquote class="italic text-gray-600 text-xl">
        “Las matemáticas son una gimnasia del espíritu y una preparación para la filosofía.”<br>
        <span class="block mt-2 text-gray-500 text-base">– Sócrates</span>
    </blockquote>
</div>

    <h1 class="text-3xl font-semibold text-blue-700 mb-6">Dejá tu comentario</h1>

    {{-- Formulario de contacto --}}
    <form class="space-y-6">
        <div>
            <label for="name" class="block text-blue-700 font-medium mb-1">Nombre</label>
            <input type="text" id="name" placeholder="Tu nombre"
                class="w-full border border-blue-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
        </div>

        <div>
            <label for="email" class="block text-blue-700 font-medium mb-1">Correo electrónico</label>
            <input type="email" id="email" placeholder="ejemplo@correo.com"
                class="w-full border border-blue-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
        </div>

        <div>
            <label for="comment" class="block text-blue-700 font-medium mb-1">Comentario</label>
            <textarea id="comment" rows="5" placeholder="Escribí tu comentario..."
                class="w-full border border-blue-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300"></textarea>
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
        <div class="p-4 bg-gray-100 rounded-md shadow-sm">
            <strong class="text-blue-700">Paula G.</strong>
            <p class="mt-1">¡Me encantó la explicación de integrales! 👏</p>
            <small class="text-gray-500 block mt-1">Hace 2 días</small>
        </div>

        <div class="p-4 bg-gray-100 rounded-md shadow-sm">
            <strong class="text-blue-700">Andrés A.</strong>
            <p class="mt-1">Muy claro el ejemplo de derivadas. ¡Gracias por compartir!</p>
            <small class="text-gray-500 block mt-1">Hace 5 días</small>
        </div>

        <div class="p-4 bg-gray-100 rounded-md shadow-sm">
            <strong class="text-blue-700">Anto P.</strong>
            <p class="mt-1">Sería genial una guía para resolver ecuaciones diferenciales.</p>
            <small class="text-gray-500 block mt-1">Hace 1 semana</small>
        </div>
    </div>
</div>
@endsection
