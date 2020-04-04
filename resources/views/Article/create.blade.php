@extends('layout')
@extends('header')

@section('content')


        <div id="page" class="container">
            <br>
            <br>
            <br>
            <h1>Create Article</h1>
            <form action="/article" method="post">
                @csrf
                <label>Title</label>
                <input type="text" class="input" name="title" id="title">
                <span>{{ $errors->first('title') }}</span>
                <label>Body</label>
                <input type="text" class="input" name="body" id="body">
                <button type="submit" class="button">Submit and Create Article</button>
            </form>



        </div>





@endsection
