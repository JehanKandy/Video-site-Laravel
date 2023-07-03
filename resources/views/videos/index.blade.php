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
                    <td>{{ $vidoe->uploader }}</td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection