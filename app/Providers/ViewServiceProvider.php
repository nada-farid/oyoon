<?php

namespace App\Providers;


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
        View::share('setting', $setting);
        View::share('hawkma_categories', $hawkma_categories);
        View::share('video_categories', $video_categories);
    }

    public function register()
    {
        //
    }
}
