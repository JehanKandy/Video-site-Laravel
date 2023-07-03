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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection