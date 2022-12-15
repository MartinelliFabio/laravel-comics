@extends('layouts.app')

@section('content')
    <h1>Comcis</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>{{$comic['title']}}</li>
            <img src="{{$comic['thumb']}}" alt="">
        @endforeach
    </ul>
@endsection