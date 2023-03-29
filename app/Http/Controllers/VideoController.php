<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Inertia\Inertia;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::all();

        return Inertia::render('Videos', ['videos' => $videos]);
    }
}
