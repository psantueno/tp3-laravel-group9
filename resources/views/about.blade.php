@extends('layouts')

@section('content')
<div class="container mx-auto px-4 py-8">

    {{-- Frase célebre --}}
   <div class="text-center mb-12">
    <blockquote class="italic text-gray-600 text-xl">
        “La belleza de las matemáticas solo se muestra a quienes tienen la paciencia de entenderlas.”<br>
        <span class="block mt-2 text-gray-500 text-base">– Évariste Galois</span>
    </blockquote>
</div>

    {{-- Imagen y texto sobre la importancia de las matemáticas --}}
    <div class="flex flex-col md:flex-row items-center gap-8 mb-12">
        <div class="w-full md:w-1/2">
            <img src="https://noticias.unsam.edu.ar/wp-content/uploads/2020/08/portada-1040x660.jpg" 
                 alt="Importancia de las Matemáticas"
                 class="w-full h-auto rounded-xl shadow-lg">
        </div>
        <div class="w-full md:w-1/2">
            <h3 class="text-2xl font-semibold text-blue-700 mb-4">¿Por qué son importantes las matemáticas?</h3>
            <p class="text-gray-700 leading-relaxed">
                Las matemáticas están presentes en todo lo que nos rodea: desde el diseño de un puente, el algoritmo que te recomienda tu canción favorita, hasta el cálculo de tus gastos personales. 
                Nos ayudan a resolver problemas, a pensar con lógica y a tomar decisiones fundamentadas. 
                En un mundo cada vez más digital y tecnológico, su valor es más relevante que nunca.
            </p>
        </div>
    </div>

    {{-- Créditos del equipo --}}
    <div class="text-center mt-12">
        <h4 class="text-xl font-semibold text-blue-700 mb-2">Desarrollado por:</h4>
        <p class="text-lg text-gray-800">Antuano Pablo Sebastian / FAI - 4973</p>
        <p class="text-lg text-gray-800">Cruz Jesus Ramon Alexis / FAI - 4582</p>
        <p class="text-lg text-gray-800">Mondaca Araceli Andrea / FAI - 2147</p>
    </div>
</div>
@endsection
