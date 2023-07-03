<?php

namespace App\Http\Controllers;

use App\Models\VideoM;
use App\Models\VideoTags;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video = VideoM::join('videos_tags','videos_tags.video_id', '=', 'videos.id')
                        ->get(['videos.video_title','videos.uploader','videos.description','videos.created_at','videos.updated_at', 'videos_tags.tags']);
    
        
        return view('videos.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'uploader' => 'required',
            'video_title' => 'required|string|max:255',
            'description' => 'required|string',
            'tags' => 'required|string|max:50',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $video = new VideoM;
        $video->uploader = $request->uploader;
        $video->video_title = $request->video_title;
        $video->description = $request->description;

        if($request->hasFile('video')){
            $vid_path = 
        }


        $video_tag = new VideoTags;
        $video_tag->tags = $request->tags;


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
