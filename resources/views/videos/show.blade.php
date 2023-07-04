@extends('layouts.dash')

<style>
    .tags{
        padding: 5px 10px;
        background-color: rgb(74, 172, 218);
        border-radius: 5px;
        color: white;
    }
</style>

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
            <div class="col-lg-6">
                <video width="400" controls>
                    <source src="{{ URL::asset("$video->video") }}" type="video/mp4">
                    Your browser does not support HTML video.
                  </video>
            </div>
            <div class="col-lg-6">
                <h5>Tags</h5>
                @php
                    $vid_tags = json_decode($video->video_tags);
                @endphp
                @foreach ($vid_tags as $tags)
                    <span class="tags">{{ $tags }}</span>
                    
                @endforeach
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <h5>Video Uplaod Date</h5>
                <h4>{{ $video->created_at }}</h4>
            </div>
            <div class="col-lg-6">
                <h5>Last Update at</h5>
                <h4>{{ $video->updated_at }}</h4>
            </div>
        </div>
    </div>
@endsection