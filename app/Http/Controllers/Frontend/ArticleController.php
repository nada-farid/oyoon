<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function articles()
    {
        $articles = Article::get();
        return view('frontend.articles', compact('articles'));
    }

    public function article($id){
        $new = Article::find($id);
        return view('frontend.new-details',compact('new'));
    }
}
