@extends('layouts.master')

@section('title', 'Blog')

@section('content')

<main class="content-blog">

    @foreach( $posts as $article)
    <article class="blog-content">
        <a href="{{ 'post/show' }}"><h2 class="blog-header">{{ $article->title }}</h2></a>
        <p class="blog-article">{{ $article->text }}</p>
        @if (Route::has('login'))
        @auth
        <div class="blog-comments"><strong>Delete</strong> / <span class="comment-btn">Comment </span>/ <span class="edit-btn">Edit</span></div>
        @else
        <div class="blog-comments">Comment / Like</div>
        @endauth
        @endif
    </article>
    @endforeach

</main>

@endsection
