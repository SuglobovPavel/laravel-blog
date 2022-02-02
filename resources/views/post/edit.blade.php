@extends('layouts.main')
@section('content')
   <form action="{{ route('post.update', $post->id) }}" method="post">
      @csrf
      @method('patch')
      <div class="mb-3">
         <label for="title" class="form-label">Title post</label>
         <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
      </div>
      <div class="mb-3">
         <label for="post_content" class="form-label">Content post</label>
         <textarea type="text" name="post_content" class="form-control" id="post_content">{{ $post->post_content }}</textarea>
      </div>
      <div class="mb-3">
         <label for="image" class="form-label">Image</label>
         <textarea type="text" name="image" class="form-control" id="image">{{ $post->image }}</textarea>
      </div>
      <select name="category_id" class="form-select" aria-label="Select category">
         @foreach($categories as $category)
         <option 
            {{ $category->id === $post->category_id ? ' selected' : '' }}
         value="{{ $category->id }}">{{ $category->title }}</option>
         @endforeach
       </select>
       <select name="tags[]" class="form-select" multiple aria-label="Select tags">
         @foreach($tags as $tag)
         <option 
            @foreach ($post->tags as $postTag)
            {{ $tag->id === $postTag->id ? ' selected' : '' }}
            @endforeach
         value="{{ $tag->id }}">{{ $tag->name }}</option>
         @endforeach
       </select>
      <button type="submit" class="btn btn-primary">Update</button>
   </form>

   <div class="mt-3">
      <a href="{{ route("post.show", $post->id) }}" class="btn btn-primary ">Back</a>
   </div>
@endsection