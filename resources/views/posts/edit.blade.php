@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        Edit Post
    </h1>

    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="flex justify-between">
            <label for="title">Post Title</label>
            <input class="p-2 border-2 border-gray-600 w-full"
                   type="text" name="title" value="{{ $post->title }}">
        </div>

        <div class="flex flex-row">
            <label for="description">Post Description</label>
            <textarea class="p-2 border-2 border-gray-600 w-full"
                      name="description" cols="30" rows="10">{{ $post->description }}</textarea>
        </div>

        <div>
            <button type="submit" class="button color-blue">Edit</button>
        </div>
    </form>

    <hr>

    <div>
        <h2>Danger Zone</h2>

        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')

            <div>
                <label for="title">Post title to delete</label>
                <input type="text" class="border-2" name="title">
            </div>

            <div>
                <button class="bg-red-400 px-4" type="submit">DELETE</button>
            </div>
        </form>
    </div>

@endsection
