@extends('layout')

@section('content')

<h1>{{ $post->title }}</h1>
<p><strong>Autor:</strong> {{ $post->poster }}</p>
<p>{{ $post->content }}</p>

@endsection