@extends('layouts.dash')

<style>
    .tags{
        padding: 5px 10px;
        background-color: rgb(74, 172, 218);
        border-radius: 5px;
        color: white;
    }
</style>

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
                <tr>
                    <td><b>{{ $loop->iteration }}</b></td>
                    <td>{{ $vid->uploader }}</td>
                    <td>{{ $vid->video_title }}</td>
                    <td>                
                        @php
                            $vid_tags = json_decode($vid->video_tags);
                        @endphp
                        @foreach ($vid_tags as $tags)
                            <span class="tags">{{ $tags }}</span>
                        @endforeach
                    </td>
                    <td>{{ $vid->created_at}}</td>
                    <td>{{ $vid->updated_at}}</td>
                    <td>
                        <a href="{{ url('/videos/' . $vid->id) }}" title="View videos "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        
                        @if (auth()->user()->role == 1 || auth()->user()->role == 2 || auth()->user()->name == $vid->uploader)
                            <a href="{{ url('/videos/' . $vid->id . '/edit') }}" title="Edit video"><button class="btn btn-primary btn-sm"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>
                        @endif

                        @if (auth()->user()->role == 1 || auth()->user()->name == $vid->uploader)
                            <form method="POST" action="{{ url('/videos' . '/' . $vid->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete video" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-calendar-times" aria-hidden="true"></i> Delete</button>
                            </form>                            
                        @endif                            
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection