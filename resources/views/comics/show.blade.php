@extends('layouts.main')

@section('title', 'comic')

@section('content')
    <div class="card text-center col-8 offset-2">
        @if (session('create'))
            <div class="alert alert-success">
                {{ session('create') }} has been created!!
            </div>
        @endif
        <div class="card-header">
            COMIC N: {{ $comic->id }}
        </div>
        <div class="my-3">
            <img class="w-25" src="{{ $comic->thumb }}" class="card-img-top" alt="imge {{ $comic->title }}">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
            <p>PRICE : {{ $comic->price }} $</p>
            <p>SALE DATE : {{$comic->sale_date}}</p>
            <p>SERIES : {{ $comic->series }}</p>
            <p>TYPE : {{ $comic->type }}</p>
            <div>
                
            </div>
            <div class="text-center">
                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="post" class="d-inline rs_delete_form" data-comic-name="{{ $comic->title }}" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const deleteForms = document.querySelectorAll('.rs_delete_form');
        deleteForms.forEach(form => {
            form.addEventListener('submit', function(event) {

                const comicName = this.getAttribute('data-comic-name');
                event.preventDefault();
                const confirmDelete = confirm(`Are you sure you want to delete ${comicName}?`);
                if (confirmDelete) {
                    this.submit();
                }
            });
        });
    </script>
@endsection