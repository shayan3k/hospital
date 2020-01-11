@extends('layouts.app')

@section('contents')
<h1 class="display-4 my-5 py-3">Posts</h1>

@forelse ($posts as $post)
<div class="well">

    <div class="media my-2 p-3">
        <div class="media-left">
            <a href="posts/{{$post->id}}">
                <img class="media-object" src="http://placehold.it/200x150" alt="placehold">
            </a>
        </div>
        <div class="media-body ml-3">
            <a href="posts/{{$post->id}}" class='text-decoration-none'>
                <h4 class="media-heading" style='color : black;'>{{ $post->title }}</h4>
            </a>
            <div class="lead">{{ $post->body }}</div>
        </div>
    </div>
    <hr />

</div>



@empty
<div class="alert alert-danger text-capitalize">no posts to show!</div>
@endforelse

@endsection
