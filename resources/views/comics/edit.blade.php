@extends('layouts.main')

@section('title', 'edit')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="mb-4">Create a new comic:</h3>
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('comics.update', $comic->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $comic->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $comic->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="thumb">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Enter image url" value="{{ $comic->thumb }}" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ $comic->price }}" required>
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Enter series" value="{{ $comic->series }}" required>
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Enter sale date" value="{{ $comic->sale_date }}" required>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Enter type" value="{{ $comic->type }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection