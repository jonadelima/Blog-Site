@extends('layout._dashboard-panel')

@section('content')
<div class="container mt-5">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p><strong>Location Type:</strong> {{ $post->place }}</p>
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" style="width: 100%; height: auto;">
    @endif
    @if(Auth::user()->role == 0)    
        <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to Posts</a>
    @elseif(Auth::user()->role == 1)
        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary mt-3">Back to Posts</a>
    @endif
</div>
@endsection