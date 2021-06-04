@extends('layouts.base')
@section('content')

    <h2>Liste des articles:</h2>
    
    @if($posts->count() > 0)
    @foreach ($posts as $post)
        <p><a href="{{ route('articles.posts', ['id' => $post->id]) }}">{{ $post->title }}</a></p>
    @endforeach
    @else
        <span>Any Post in DB</span>
    @endif

@endsection