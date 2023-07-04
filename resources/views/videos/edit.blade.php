@extends('layouts.dash')

@if ((auth()->user()->name != $video->uploader && auth()->user()->role == 3))
<script>window.location = "/videos";</script>
@endif

@section('content')
    <div class="admin-card">
        <a href="{{ url('/videos') }}"><button class="btn btn-primary">Back</button></a><br>
        <hr>
        <h2>Edit Video</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="uploader">Video Uploader</label>
                    <input type="text" id="" class="form-control">
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
@endsection