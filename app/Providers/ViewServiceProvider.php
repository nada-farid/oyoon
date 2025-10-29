<?php

namespace App\Providers;


use App\Models\AudienceSatisfaction;
use App\Models\HawkamCategory;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\VideoCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {  
        $setting = Setting::first();
        $hawkma_categories = HawkamCategory::all();
        $video_categories = VideoCategory::where('published', true)->get();
        $audience_satisfactions = AudienceSatisfaction::where('published', true)->with('publishedItems')->orderBy('sort_order')->get();
        View::share('setting', $setting);
        View::share('hawkma_categories', $hawkma_categories);
        View::share('video_categories', $video_categories);
        View::share('audience_satisfactions', $audience_satisfactions);
    }

    public function register()
    {
        //
    }
}
