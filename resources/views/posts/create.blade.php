@extends('layouts.app')

@section('content')
<div class="display-4 text-center">New Post</div>

<form action="{{route('posts-store')}}" method="POST" class='my-5'>
    <div class="row d-flex justify-content-center align-content-center">
        <div class="col-5">
            <div class="form-group">
                <label for="title" class='d-inline-block'>Post Title:</label>
                <input type="text" class='form-control' name="title" value='{{ old('title') ?? '' }}'>
            </div>
            <div class="form-group">
                <label for="body" class='d-inline-block'>Post Body:</label>
                <textarea name="body" class='form-control' cols="25" rows="10">{{ old('body') ?? '' }}</textarea>

            </div>
            @csrf
            <button type="submit" class='btn btn-outline-info btn-lg'>Add Post</button>
        </div>
    </div>

</form>
</div>
@endsection
