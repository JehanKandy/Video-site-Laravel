@extends('layouts.dash')


@section('content')
    <div class="admin-card">
        <a href="{{ url('/videos') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <hr>
        <h2>Add New Video</h2>
        <h4 style="color: red">Important</h4>
        <p>use following method to add "tags" of the Video</p>
        <p style="color: red">["tag1","tag2","tag3",....]</p>
        <br>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Errors : </strong> You got Following Errors while validation this form<br>
                        <b>{{ $error }}</b>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
        @endif

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
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" style="resize: none;"></textarea><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="tags">Tags</label>
                    <input type="text" name="video_tags" id="" class="form-control"><br>
                </div>
                <div class="col-lg-6">
                    <label for="video">Video</label>
                    <input type="file" name="video" id="" class="form-control"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <input type="reset" value="Clear" class="btn btn-secondary" style="width: 100%;">
                </div>
                <div class="col-lg-6">
                    <input type="submit" value="Add Video" class="btn btn-success" style="width: 100%;">
                </div>
            </div>
        </form>
    </div>
@endsection