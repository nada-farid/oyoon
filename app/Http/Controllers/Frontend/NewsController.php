<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function news()
    {
        $news = News::get();
        return view('frontend.news', compact('news'));
    }

    public function new($id){
        $new = News::find($id);
        return view('frontend.new-details',compact('new'));
    }
}
