@extends('layouts.dash')

@if ((auth()->user()->name != $video->uploader && auth()->user()->role == 3))
<script>window.location = "/videos";</script>
@endif

@section('content')
    <div class="admin-card">
        <a href="{{ url('/video') }}"><button class="btn btn-primary">Back</button></a><br>
        <hr>
        <h2>Edit Video</h2>
    </div>
@endsection