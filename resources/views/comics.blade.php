@extends('layouts.app')

@section('content')
    <div class="container container-comics">
        <div class="comics-main">
            <div class="row d-flex flex-wrap">
                @foreach ($comics as $comic)
                <div class="my-card">
                    <div class="img-box">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <p class="text-white">{{$comic['series']}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection