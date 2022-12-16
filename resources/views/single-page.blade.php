@extends('layouts.app')

@section('content')

<div>
    <div class="blue"></div>
    <div class="container">
        <div class="box-single-img">
            <span class="comic">comic book</span>
            <img src="{{$comics['thumb']}}" alt="" class="img-single">
            <span class="view text-center">view gallery</span>
        </div>
    </div>
</div>

@endsection