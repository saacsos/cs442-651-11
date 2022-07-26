@extends('layouts.main')

@section('content')
    <h1>{{ $post->title }}</h1>

    <div>
        {{ $post->like_count }} likes |
        {{ $post->view_count }} views
    </div>

    <div>
        {{ $post->description }}
    </div>
@endsection
