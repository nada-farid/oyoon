<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    public function media()
    {
        $media = Gallery::paginate(10);
        return view('frontend.media', compact('media'));
    }

    public function article($id){
        $new = Article::find($id);
        return view('frontend.new-details',compact('new'));
    }
}
