@extends('layouts.admin')

@section('admin-content')

    <div class="row">
        @foreach($adminposts as $post)
            <div class="col-md-4 my-3">
                <div class="card ">
                    <div class="card-top-img">
                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="image">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="{{ route('single.post', $post->id) }}" class="btn btn-primary">View Post</a>
                        <div class="float-right">
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary"><i class="fas fa-pen-square"></i></a>
                            </a>
                            @if(Auth::user()->role == "admin")
                            <a class="btn btn-danger" href="{{ route('post.delete', $post->id) }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            @endif
                            <form id="delete-form" action="{{ route('post.delete', $post->id) }}" method="POST" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
