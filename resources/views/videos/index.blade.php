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
                @foreach ($vidoes as $vidoe)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $vidoe->uploader }}</td>
                    <td>{{ $vidoe->description }}</td>
                    <td>{{ $vidoe->vidoes_tags->tags }}</td>
                    <td>{{ $vidoe->created_at }}</td>
                    <td>{{ $vidoe->updated_at }}</td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection