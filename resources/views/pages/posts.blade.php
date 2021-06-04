@extends('layouts.base')
@section('content')
   <div> <h2>Poste numéro: {{ $posts->id }} </h2></div>

    <hr>
    <div><img src="{{ $posts->image ? $posts->image->path : 'Pas d\'image pr le moment' }}" alt="image"></div>
    <div>
    <p>Titre: {{ $posts->title }}</p>
    <p>Contenu: {{ $posts->content }}</p>
    </div>

    <hr>

    {{-- @if ($posts->comments->count() > 0)
        @foreach($posts->comments as $comment)
            <div><p>{{ $comment->content }}</p></div>
        @endforeach
    @else
        <div><p>Pas encore de Commentaires</p></div>
    @endif --}}

    <hr>

    @if ($posts->tags->count() > 0)
        @foreach($posts->tags as $tag)
            <div><p>{{ $tag->name }}</p></div>
        @endforeach
    @else
        <div><p>Pas encore de Tag pour ce post</p></div>
    @endif
@endsection