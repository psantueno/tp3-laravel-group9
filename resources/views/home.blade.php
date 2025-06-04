@extends('layout')

@section('content')
    <div class="bg-white rounded-lg shadow p-8 mb-8">
        <h1 class="text-3xl font-bold text-blue-700 mb-4">Bienvenido a MATH+BLOG</h1>
        <p class="text-gray-700 text-lg mb-4">
            Este es un espacio dedicado a compartir, aprender y disfrutar de la matemática. Encontrarás artículos, ejercicios, curiosidades y recursos para todos los niveles, desde estudiantes hasta entusiastas.
        </p>
        @guest
            <div class="mb-4">
                <a href="{{ url('/register') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded transition">
                    ¡Registrate y empezá a participar!
                </a>
            </div>
        @endguest
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-blue-50 rounded-lg p-6 shadow">
            <h2 class="text-xl font-semibold text-blue-800 mb-2">¿Qué podés encontrar aquí?</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Artículos sobre álgebra, geometría, análisis y más.</li>
                <li>Ejercicios resueltos y desafíos matemáticos.</li>
                <li>Curiosidades y anécdotas históricas.</li>
                <li>Recursos útiles para estudiantes y docentes.</li>
                <li>Un espacio para compartir tus propios posts y explorar contenido matemático.</li>
            </ul>
        </div>
        <div class="bg-white rounded-lg p-6 shadow flex flex-col justify-center items-center">
            <span class="text-6xl mb-4">📘</span>
            <p class="text-gray-600 text-center">
                “No te preocupes por tus dificultades con las matemáticas; te puedo asegurar que las mías son todavía mayores.”<br>
                <span class="text-sm text-gray-500">– Albert Einstein -</span>
            </p>
        </div>
    </div>
@endsection