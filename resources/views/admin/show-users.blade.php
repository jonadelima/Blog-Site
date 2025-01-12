@extends('layout._dashboard-panel')

@section('content')





<div class="container mt-5">
    <h1>User Details</h1>
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
</div>
<a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
@endsection
