<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Director;
use App\Models\Gallery;
use App\Models\HawkamCategory;
use App\Models\Hawkma;
use App\Models\News;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Report;
use App\Models\ReportCategory;
use App\Models\SaidAboutUs;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::get();
        $projects = Project::all();
        $news = News::get();
        $testimonials = SaidAboutUs::all();
        $clients = Partner::all();
        return view('frontend.index', compact('sliders', 'services', 'projects', 'news', 'testimonials','clients'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function chairman()
    {
        return view('frontend.chairman');
    }

    public function partners()
    {
        $partners = Partner::all();
        return view('frontend.partners',compact('partners'));
    }

    public function directors()
    {
        $directors = Director::all();
        return view('frontend.directors',compact('directors'));
    }
    
    public function hawkma(HawkamCategory $category)
    {
        $files = Hawkma::where('category_id',$category->id)->get();
        return view('frontend.hawkma',compact('files','category'));
    }
    public function reports($type)
    {
        $categories = ReportCategory::where('type',$type)->get();
        return view('frontend.reports',compact('categories','type'));
    }

    
    public function gallery()
    {
        $galleries = Gallery::get();
        return view('frontend.gallery',compact('galleries'));
    }

    public function cache()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
      
            Artisan::call('storage:link');
    }

    public function scope()
    {
        return view('frontend.scope');
    }

    public function certificates()
    {
        $certificates = Certificate::get();
        return view('frontend.certificates',compact('certificates'));
    }
    public function sustainability()
    {
        return view('frontend.sustainability');
    }

    public function support()
    {
        $supports = Support::get();
        return view('frontend.supports',compact('supports'));
    }
    
}
