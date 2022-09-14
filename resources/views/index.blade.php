@extends('layouts.main')

@section('title', 'Index')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="mb-4">Comics:</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th colspan="2">Title</th>
                            <th>Price</th>
                            <th>Series</th>
                            <th>Sale Date</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($comics as $comic)
                            <tr>
                                <td><a href="{{route('comics.show', $comic->id)}}">{{$comic->id}}</a></th>
                                <td colspan="2">{{$comic->title}}</td>
                                <td>{{$comic->price}} $</td>
                                <td>{{$comic->series}}</td>
                                <td>{{$comic->sale_date}}</td>
                                <td>{{$comic->type}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No comics found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
        </div>
    </div>
@endsection