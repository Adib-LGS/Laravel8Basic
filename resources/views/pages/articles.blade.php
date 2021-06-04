@extends('layouts.base')
@section('content')

<hr>
<br>
    <h2>Liste des articles:</h2>
    
    @if($posts->count() > 0)
    @foreach ($posts as $post)
        <p><a href="{{ route('articles.posts', ['id' => $post->id]) }}">{{ $post->title }}</a></p>
    @endforeach
    @else
        <span>Any Post in DB</span>
    @endif

    <hr>
    <br>

    <p>Vidéos:</p>

    <hr>
    <br>

    @if($videos->count() > 0)
    @foreach($videos->comments as $comment)
        <p>Commentaires Vidéos: {{ $comment->content }}</p>
    @endforeach
    @endif

@endsection