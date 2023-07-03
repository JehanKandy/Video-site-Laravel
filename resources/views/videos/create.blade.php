@extends('layouts.dash')


@section('content')
    <div class="admin-card">
        <a href="{{ url('/videos') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <hr>
        <h2>Add New Video</h2><br>

        <form action="{{ url('/videos') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-6">
                    <label for="uploader">Video Uploader</label>
                    <input type="text" id="" class="form-control" value="@php echo Auth::user()->name; @endphp" disabled><br>
                    <input type="hidden" name="uploader" value="@php echo Auth::user()->name; @endphp">
                </div> 
                <div class="col-lg-6">
                    <label for="video_title">Video Title</label>
                    <input type="text" name="video_title" id="" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label for="description">Video Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="" class="form-control"><br>
                </div>
                <div class="col-lg-6">
                    <label for="video">Video</label>
                    <input type="file" name="video" id="" class="form-control"><br>
                </div>
            </div>

        </form>
    </div>
@endsection