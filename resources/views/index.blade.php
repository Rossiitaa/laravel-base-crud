@extends('layouts.main')

@section('title', 'index')

@section('content')
    <h1>Comics</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{ $comic->title }}   
            </li>
            <li>
                {{ $comic->description }}
            </li>
            <li>
                {{ $comic->thumb }}
            </li>
            <li>
                {{ $comic->price }}
            </li>
            <li>
                {{ $comic->series }}
            </li>
            <li>
                {{ $comic->sale_date }}
            </li>
            <li>
                {{ $comic->type }}
            </li>
            <br>
        @endforeach
    </ul>
@endsection