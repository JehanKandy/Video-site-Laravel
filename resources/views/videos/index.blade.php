@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Video Uploader</th>
                    <th>Video Description</th>
                    <th>VideoTitle</th>
                    <th>Video Tags</th>
                    <th>Add Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $video->uploader }}</td>
                    <td>{{ $video->description }}</td>
                    <td>{{ $video->videos_tags->tags }}</td>
                    <td>{{ $video->created_at }}</td>
                    <td>{{ $video->updated_at }}</td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection