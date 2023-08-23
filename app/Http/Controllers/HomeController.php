<?php

namespace App\Http\Controllers;

use App\Category;
use App\Models\Sectioncall;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Work;
use App\NewsletterContent;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        $calls = Sectioncall::where('status', 1)->where('id',1)->first();
        $categories = Category::where('status', 1)->get();
        $works = Work::where('status', 1)->get();
        $newsletter_content = NewsletterContent::all();

        return view('home.index')->with([
            'sliders' => $sliders,
            'services' => $services,
            'calls'  => $calls,
            'categories'=>$categories,
            'works'=>$works,
            'newsletter_content'=>$newsletter_content,
        ]);
    } }
