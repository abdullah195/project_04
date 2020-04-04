@extends('layout')
@extends('header')
@section('content')
    <div id="page" class="container">
        <br>
        <br>
        <br>
        <h1>Edit Article</h1>
        <form method="POST" action="/article/{{$article->id}}" >
            @csrf
            @method('PUT')

            <label>Title</label>
            <input type="text" class="input" name="title" value="{{ $article->title }}" id="title">
            <label>Body</label>
            <input type="text" class="input" name="body" value="{{ $article->body }}" id="body">
            <button type="submit" class="button">EDIT Button</button>
        </form>
    </div>

@endsection
