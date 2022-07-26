@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        Create New Post
    </h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="flex justify-between">
            <label for="title">Post Title</label>
            <input class="p-2 border-2 border-gray-600 w-full" type="text" name="title">
        </div>

        <div class="flex flex-row">
            <label for="description">Post Description</label>
            <textarea class="p-2 border-2 border-gray-600 w-full" name="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button type="submit" class="button color-violet">
                Create
            </button>
        </div>
    </form>

@endsection
