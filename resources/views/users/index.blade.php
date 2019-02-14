@extends('layouts.master')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto ">
                            <h4 class="m-0">Libraries</h4>
                        </div>
                        <div class="col-auto">
                            <a href="/users/create" class="btn btn-primary">Create new Library</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            {{--<td>{{$book->year}}</td>--}}
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="/users/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/users/{{$user->id}}" method="post">
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
