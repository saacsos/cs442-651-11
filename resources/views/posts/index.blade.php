@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
        <div class="mb-2 p-2 border-2 mx-4">
            <p class="text-2xl">
                {{ $post->title }}
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
