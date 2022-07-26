@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
        <div class="mb-2 p-6 border-2 mx-4 w-full md:w-1/2">
            <p class="md:text-xl md:hover:text-2xl hover:text-blue-600">
                <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                    {{ $post->title }}
                </a>
            </p>
            <p>
                {{ $post->view_count }} views
            </p>
            <p>
                {{ $post->like_count }} likes
            </p>
        </div>
    @endforeach

@endsection
