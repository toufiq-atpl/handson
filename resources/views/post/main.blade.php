@extends('layouts.app')   


@section('content')

    @if(count($posts) == 0)
    no posts
    @endif
    @foreach($posts as $post)
        <div class="card mb-2" style="width:80%" >
            <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Author</h6>
            <p class="card-text">{{$post->body}}</p>

            <form action="{{url('posts')}}" method="post">

            </form>

            <a href="{{url('posts',$post->id)}}" class="btn btn-sm btn-primary mx-2">Edit</a>
            <a href="#" class="btn btn-sm btn-primary mx-2">Delete</a>
            </div>
        </div>
    @endforeach


@endsection