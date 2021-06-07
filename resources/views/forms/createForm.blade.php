@extends('layouts.base')
@section('content')

<h1>Créer un nvo poste:</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="text-red-500">{{ $error }}</div>
    @endforeach
@endif

<form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
@csrf
    <input type="text" name="title" id="" class="border-black-600 border-2 block my-2">
    <textarea name="content" id="" cols="30" rows="10" class="border-black-600 border-2 block my-2"></textarea>

    <label for="avatar">Choose a profile picture:</label>

    <input type="file" class="block my-2"
        id="avatar" name="avatar"
        accept="image/png, image/jpeg">

    <button type="submit" class="bg-green-500">Créer</button>
</form>
@endsection 