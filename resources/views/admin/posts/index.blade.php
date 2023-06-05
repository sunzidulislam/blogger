@extends('layouts.admin')

@section('admin-content')

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 my-3">
                <div class="card ">
                    <div class="card-top-img">
                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="image">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="#" class="btn btn-primary">View Post</a>
                        <div class="float-right">
                            <a href="#" class="btn btn-secondary"><i class="fas fa-pen-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
