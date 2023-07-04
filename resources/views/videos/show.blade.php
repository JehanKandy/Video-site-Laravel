@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <a href="{{ url('/videos') }}"><button class="btn btn-primary">Back</button></a>
        <br><hr><br>
        <div class="row">
            <div class="col-lg-6">
                <h5>Uploader</h5>
                <h4>{{ $video->uploader }}</h4>
            </div>
            <div class="col-lg-6">
                <h5>Video Title</h5>
                <h4>{{ $video->video_title }}</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <h5>Video Description</h5>
                <p>{{ $video->description }}</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <video width="400" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support HTML video.
                  </video>
            </div>
        </div>
    </div>
@endsection