@extends('layouts.main')

@section('title')
    Home Page
@endsection


@section('content')
    <form action="/posts/{{ $post->id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <h1>Edit a Post</h1>
        <hr>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" id="content" name="content" placeholder="Content">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection