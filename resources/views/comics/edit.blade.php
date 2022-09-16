@extends('layouts.main')

@section('title', 'edit')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="mb-4">Create a new comic:</h3>
            <form action="{{route('comics.update', $comic->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title', $comic->title) }}">
                    @error('title')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $comic->description) }}</textarea>
                    @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="thumb">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Enter image url" value="{{ old('thumb', $comic->thumb) }}">
                    @error('thumb')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ old('price', $comic->price) }}">
                    @error('price')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Enter series" value="{{ old('series', $comic->series) }}">
                    @error('series')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Enter sale date" value="{{ old('sale_date', $comic->sale_date) }}">
                    @error('sale_date')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Enter type" value="{{ old('type', $comic->type) }}">
                    @error('type')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection