@extends('layouts.dash')

@section('content')
    <div class="admin-card">

        <a href="{{ url('videos/create') }}"><button class="btn btn-success"><i class="fas fa-video"></i> Add New Video</button></a><br><br>
        

        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Video Uploader</th>
                    <th>Video Title</th>
                    <th>Video Tags</th>
                    <th>Add Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($video as $vid)
                    <td><b>{{ $loop->iteration }}</b></td>
                    <td>{{ $vid->uploader }}</td>
                    <td>{{ $vid->video_title }}</td>
                    <td>                
                        @php
                            $vid_tags = json_decode($vid->tags);
                        @endphp
                        @foreach ($vid_tags as $tag)
                            {{ $tag }}<br>
                        @endforeach
                    </td>
                    <td>{{ $vid->created_at}}</td>
                    <td>{{ $vid->updated_at}}</td>
                    <td>Action</td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection