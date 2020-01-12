@extends('layouts.app')

@section('content')

<div class='well'>

    <h1 class="h1 display-4 text-capitalize">{{$post->title}}</h1>
    <hr />
    <p class="lead">{{$post->body}}</p>
    <div class="row">
        <a href="{{ route('posts-edit' , $post->id)}}"
            class='btn btn-outline-warning ml-auto text-capitalize'>update</a>
        <form action="{{route('posts-destroy' , $post->id)}}" method='POST'>
            @csrf
            @method('delete')
            <button type='submit' class='btn btn-outline-danger mx-3 text-capitalize'>Delete</button>
        </form>
    </div>

</div>
@endsection
