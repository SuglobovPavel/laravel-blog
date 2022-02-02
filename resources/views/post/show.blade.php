@extends('layouts.main')
@section('content')
   <div>
      <h2>{{ $post->id }}. {{ $post->title }}</h2>
      <p>{{ $post->post_content }}</p>
   </div>
   <div class="mt-3">
      <a href="{{ route("post.index") }}" class="btn btn-primary ">Back</a>
      <a href="{{ route("post.edit", $post->id) }}" class="btn btn-secondary ">Edit</a>
      <form action="{{ route('post.delete', $post->id) }}" method="post">
         @csrf
         @method('delete')
         <button type="submit" class="btn btn-warning mt-3">Delete</button>
      </form>
   </div>
@endsection