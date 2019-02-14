@extends('layouts.master')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto ">
                            <h4 class="m-0">Books</h4>
                        </div>
                        <div class="col-auto">
                            <a href="/books/create" class="btn btn-primary">Create new book</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            {{--<td>{{$book->year}}</td>--}}
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="/books/{{$book->id}}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/books/{{$book->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
