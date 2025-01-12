@extends('layout._dashboard-panel')

@section('content')


<div class="container mt-5">
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="place">Place</label>
            <select class="form-control" id="place" name="place" required>
                <option value="Beaches/Resorts" {{ $post->place == 'Beaches/Resorts' ? 'selected' : '' }}>Beaches/Resorts</option>
                <option value="Cities" {{ $post->place == 'Cities' ? 'selected' : '' }}>Cities</option>
                <option value="Landscape" {{ $post->place == 'Landscape' ? 'selected' : '' }}>Landscape</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" style="width: 100px; height: auto;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection
