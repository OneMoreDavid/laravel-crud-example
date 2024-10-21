@extends('layout');

@@section('content')
    <h1>Posts</h1>
    <a href="{{route('posts.create')}}">Create New Post</a>

    @@foreach ($posts as $post)
        <div>
            <h2><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h2>
            <a href="{{route('posts.edit', $post->id)}}">Edit</a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection