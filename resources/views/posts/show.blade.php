@extends('layouts.main')

@section('content')
    <div class="px-4 py-2">
        <h1>{{ $post->title }}</h1>

        <div>
            {{ $post->like_count }} likes |
            {{ $post->view_count }} views
        </div>

        <div class="my-4">
            {{ $post->description }}
        </div>

        <div class="my-2">
            <a class="button color-blue" href="{{ route('posts.edit', ['post' => $post->id]) }}">
                Edit this post
            </a>
        </div>
    </div>
@endsection
