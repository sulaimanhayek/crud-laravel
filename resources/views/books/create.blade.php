@extends('layouts.master')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            @include('layouts.errors')
            <div class="card">
                <div class="card-body">
                    <form action="/books" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input value="{{old('title')}}" id="title" name="title" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">Author</label>
                            <input value="{{old('author')}}" id="author" name="author" type="text" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @endsection
