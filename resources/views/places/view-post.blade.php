@extends('layout._home')

@section('content')
<div class="container img-post">
    <h1>{{ $post->title }}</h1>
    @if ($post->image > 100)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3" alt="Post Image">
    @endif
    <p>{{ $post->content }}</p>
    <p><strong>Location Type:</strong> {{ $post->place }}</p>
    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Back</a>
</div>
@endsection