@extends('layout')
@extends('header')

@section('content')

    <br>
    <br>
    <br>
    <br>

    @foreach($Articles ?? '' as $article)
        <h5>{{ $article->title }}</h5>
        <h5>{{ $article->body }}</h5>
        <br>
    @endforeach

@endsection
