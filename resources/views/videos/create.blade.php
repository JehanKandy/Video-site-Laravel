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
                    <input type="text" id="" class="form-control" value="@php echo Auth::user()->name; @endphp" disabled>
                    <input type="hidden" name="uploader" value="@php echo Auth::user()->name; @endphp">
                </div> 
                <div class="col-lg-6">
                    <label for="video_title">Video Title</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
            </div>

        </form>
    </div>
@endsection