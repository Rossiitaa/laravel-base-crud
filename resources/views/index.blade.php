@extends('layouts.main')

@section('title', 'Index')

@section('content')
    <div class="container">
        <div class="row">
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }} has been deleted!!
                </div>                
            @endif
            @if (session('update'))
                <div class="alert alert-success">
                    {{ session('update') }} has been updated!!
                </div>
            @endif
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
                            <th>Edit</th>
                            <th>Delete</th>
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
                                <td>
                                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post" class="rs_delete_form" data-comic-name="{{ $comic->title }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
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