@extends('layouts.admin')

@section('content')
   @foreach($posts as $post)
         <article>
            <a href="{{ route('post.show', $post->id) }}">
               <h2>{{ $post->title }}</h2>
               <em>{{ $post->created_at }}</em>
               <p>{{ $post->description }}</p>
            </a>
         </article>
      @endforeach

      <div class="paginate">
         {{ $posts->withQueryString()->links() }}
      </div>

      <div class="mt-3">
         <a href=" {{ route('post.create') }}"  class="btn btn-primary ">Post create</a>
      </div>
@endsection