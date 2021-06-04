@extends('layouts.base')
@section('content')

<h1>Créer un nvo poste:</h1>

<form action="{{ route('articles.store') }}" method="post">
@csrf
    <input type="text" name="title" id="" class="border-black-600 border-2">
    <textarea name="content" id="" cols="30" rows="10" class="border-black-600 border-2"></textarea>
    <button type="submit" class="bg-green-500">Créer</button>
</form>
@endsection 