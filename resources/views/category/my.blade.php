@extends('layout')

@section('content')
<div class="flex flex-col gap-6">
    <h1 class="text-2xl font-bold text-blue-700 text-center">MIS POSTS</h1>
    <div class="flex flex-col gap-6">
        <h2 class="text-xl font-bold text-blue-700">POSTS HABILITADOS</h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
            <div class="bg-white rounded-lg shadow p-6 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600 text-sm mb-1">Por {{ $post->user->name }}</p>
                    <p class="text-gray-600 text-sm mb-1"><span class="font-bold">Tipo:</span> {{ $post->type }}</p>
                    <p class="text-gray-600 text-sm mb-4"><span class="font-bold">Creado el:</span> {{ $post->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div class="flex gap-2 mt-4">
                    <a href="{{ url('/category/show/' . $post->id) }}"
                        class="bg-gray-500 text-white font-bold py-2 px-4 rounded hover:bg-gray-700 transition">
                        Ver
                    </a>
                    @if(Auth::check() && $post->user_id === Auth::id())
                    <a href="{{ url('/category/edit/' . $post->id) }}"
                        class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
                        Editar
                    </a>
                    <a href="{{ url('/category/delete/' . $post->id) }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition">
                        Eliminar
                    </a>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full text-gray-500 text-center">No hay posts para mostrar.</div>
            @endforelse
        </div>
    </div>

    <div class="flex flex-col gap-6">
        <h2 class="text-xl font-bold text-blue-700">POSTS DESHABILITADOS</h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($postsUnhabilitated as $unhabilitated)
            <div class="bg-white rounded-lg shadow p-6 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $unhabilitated->title }}</h2>
                    <p class="text-gray-600 text-sm mb-1">Por {{ $unhabilitated->user->name }}</p>
                    <p class="text-gray-600 text-sm mb-1"><span class="font-bold">Tipo:</span> {{ $unhabilitated->type }}</p>
                    <p class="text-gray-600 text-sm mb-4"><span class="font-bold">Creado el:</span> {{ $unhabilitated->created_at->format('d/m/Y H:i') }}</p>
                </div>
                <div class="flex gap-2 mt-4">
                    <a href="{{ url('/category/show/' . $unhabilitated->id) }}"
                        class="bg-gray-500 text-white font-bold py-2 px-4 rounded hover:bg-gray-700 transition">
                        Ver
                    </a>
                    @if(Auth::check() && $unhabilitated->user_id === Auth::id())
                    <a href="{{ url('/category/edit/' . $unhabilitated->id) }}"
                        class="bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
                        Editar
                    </a>
                    <a href="{{ url('/category/delete/' . $unhabilitated->id) }}" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition">
                        Eliminar
                    </a>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-full text-gray-500 text-center">No hay posts para mostrar.</div>
            @endforelse
        </div>
    </div>
</div>


@endsection