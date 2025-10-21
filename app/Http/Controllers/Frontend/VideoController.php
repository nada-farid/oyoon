<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $categories = VideoCategory::where('published', true)
            ->get();
        
        return view('frontend.videos.index', compact('categories'));
    }

    public function category(VideoCategory $category)
    {
        $videos = Video::where('category_id', $category->id)
            ->where('published', true)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
        
        return view('frontend.videos.category', compact('videos', 'category'));
    }

    public function show(Video $video)
    {
        // Increment view count
        $video->increment('views_count');
        
        // Get related videos from the same category
        $relatedVideos = Video::where('category_id', $video->category_id)
            ->where('id', '!=', $video->id)
            ->where('published', true)
            ->take(4)
            ->get();
        
        return view('frontend.videos.show', compact('video', 'relatedVideos'));
    }
}
