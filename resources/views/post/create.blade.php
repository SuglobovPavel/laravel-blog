@extends('layouts.main')
@section('content')
   <form action="{{ route('post.store') }}" method="POST">
      @csrf
      <div class="mb-3">
         <label for="title" class="form-label">Title post</label>
         <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок" value="{{ old('title') }}">
         @error('title')
         <p class="text-danger">{{ $message }}</p>
         @enderror
      </div>
      <div class="mb-3">
         <label for="post_content" class="form-label">Content post</label>
         <textarea type="text" name="post_content" class="form-control" id="post_content" placeholder="Контент">{{ old('title') }}</textarea>
         @error('post_content')
         <p class="text-danger">{{ $message }}</p>
         @enderror
      </div>
      <div class="mb-3">
         <label for="image" class="form-label">Image</label>
         <textarea type="text" name="image" class="form-control" id="image" placeholder="Изображение" value="{{ old('title') }}"></textarea>
         @error('image')
         <p class="text-danger">{{ $message }}</p>
         @enderror
      </div>
      <p>Select category</p>
      
      <select name="category_id" class="form-select" aria-label="Select category">
         @foreach($categories as $category)
         <option 
            {{ old('category_id') == $category->id ? "selected" : "" }}
         value="{{ $category->id }}">{{ $category->title }}</option>
         @endforeach
       </select>
       <p>Select tags</p>
       <select name="tags[]" class="form-select" multiple aria-label="Select tags">
         @foreach($tags as $tag)
         <option value="{{ $tag->id }}">{{ $tag->name }}</option>
         @endforeach
       </select>
      <button type="submit" class="btn btn-primary">Create</button>
   </form>
@endsection