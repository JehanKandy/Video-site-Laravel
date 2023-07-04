@extends('layouts.dash')

@if ((auth()->user()->name != $video->uploader && auth()->user()->role == 3))
<script>window.location = "/videos";</script>
@endif

@section('content')
    <div class="admin-card">
        <a href="{{ url('/videos') }}"><button class="btn btn-primary">Back</button></a><br>
        <hr>
        <h2>Edit Video</h2><hr>
        <form action="{{ url('videos/'. $video->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="uploader">Video Uploader</label>
                        <input type="text" name="uploader" value="{{ $video->uploader }}" class="form-control" disabled>
                        <input type="hidden" name="uploader" value="{{ $video->uploder }}">     
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </form>

    </div>
@endsection