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
        $video = VideoM::all();        
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
            'video_tags' => 'required|string|max:50',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $video = new VideoM;
        $video->uploader = $request->uploader;
        $video->video_title = $request->video_title;
        $video->description = $request->description;
        $video->video_tags = $request->video_tags;
        if($request->hasFile('video')){
            $vid_path = $request->file('video')->store('video', ['disk' => 'my_files']);
            $video->video = $vid_path;
        }
        $video->save();

        

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
