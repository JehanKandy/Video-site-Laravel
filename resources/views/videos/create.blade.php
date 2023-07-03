@extends('layouts.dash')


@section('content')
    <div class="admin-card">
        <a href="{{ url('/videos') }}"><button class="btn btn-primary">Back</button></a><br><br>
        <hr>
        <h2>Add New Video</h2>

        <form action="{{ url('/videos') }}" method="POST" enctype="multipart/form-data">
            @csrf

            
        </form>
    </div>
@endsection