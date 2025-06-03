@extends('layout')

@section('content')
    <h1>Listado de Posts</h1>

<ul>
    @foreach ($posts as $post)
        <li>
            <strong>{{ $post->title }}</strong> por {{ $post->poster }}
            <a href="{{ url('/category/show/' . $post->id) }}">Ver</a>
            <a href="{{ url('/category/edit/' . $post->id) }}">Editar</a>
        </li>
    @endforeach
</ul>

@endsection
