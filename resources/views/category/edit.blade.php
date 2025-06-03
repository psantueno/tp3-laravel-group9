@extends('layout')

@section('content')
<h1>Editar Post: {{ $post->title }}</h1>

<form action="#" method="POST">
    @csrf
    <label>Título:</label>
    <input type="text" name="title" value="{{ $post->title }}">

    <label>Autor:</label>
    <input type="text" name="poster" value="{{ $post->poster }}">

    <label>Contenido:</label>
    <textarea name="content">{{ $post->content }}</textarea>

    <label>Habilitado:</label>
    <input type="checkbox" name="habilitated" {{ $post->habilitated ? 'checked' : '' }}>

    <button type="submit">Guardar</button>
</form>

@endsection