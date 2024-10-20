@extends('layout')

@section('content')
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        
        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <button type="submit">Submit</button>
    </form>
@endsection
