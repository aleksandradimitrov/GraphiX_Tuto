<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Inertia\Inertia;
use App\Http\Requests\ReviewVideoRequest;

class VideoController extends Controller
{
    public function index(){

        $videos = Video::with('ratings')->get();
        $getVideos = [];
        foreach($videos as $video){
          $getVideos[] = $video->toArray();
        }
        
        return Inertia::render('Videos', ['videos' => $getVideos]);
    }
    public function show(Video $video){
        $ratings = [];
        foreach($video->ratings()->latest()->get() as $rating){
            $r = $rating;
            $r['user']= $rating->user;
            $ratings[] = $r->toArray();
        }
        return Inertia::render('VideosShow', [
            'video' => $video,
            'ratings' => $ratings]);
        }

    public function store(ReviewVideoRequest $request)
    {
        \App\Models\Rate::factory()->create([
            'user_id' =>\Auth::user()->id,
            'video_id' =>request('video_id'),
            'rating' => request('rating'), 
            'comment' =>request('comment')  
        ]);
        return redirect()->back();

    }    
}
