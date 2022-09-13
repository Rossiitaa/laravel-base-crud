@extends('layouts.main')

@section('title', 'comic')

@section('content')
    <div class="card text-center col-8 offset-2">
        <div class="card-header">
            COMIC N: {{ $comic->id }}
        </div>
        <div class="my-3">
            <img class="w-25" src="{{ $comic->thumb }}" class="card-img-top" alt="imge {{ $comic->title }}">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
            <p>PRICE : {{ $comic->price }}</p>
            <p>SALE DATE : {{$comic->sale_date}}</p>
            <p>SERIES : {{ $comic->series }}</p>
            <p>TYPE : {{ $comic->type }}</p>
        </div>
    </div>
@endsection
