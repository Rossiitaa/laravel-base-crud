@extends('layouts.main')

@section('title', 'create')

@section('content')
    <div class="container">
        <div class="row">
            <h3 class="mb-4">Create a new comic:</h3>
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="thumb">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Enter image url">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="series">Series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="Enter series">
                </div>
                <div class="form-group">
                    <label for="sale_date">Sale Date</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Enter sale date">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Enter type">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection