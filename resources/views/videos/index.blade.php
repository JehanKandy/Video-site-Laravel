@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Video Uploader</th>
                    <th>VideoTitle</th>
                    <th>Video Tags</th>
                    <th>Add Date</th>
                    <th>Last Update</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($video as $vid)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $vid->uploader }}</td>
                    <td>{{ $vid->tags}}</td>
                    <td>{{ $vid->created_at}}</td>
                    <td>{{ $vid->updated_at}}</td>
                    <td>Action</td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection