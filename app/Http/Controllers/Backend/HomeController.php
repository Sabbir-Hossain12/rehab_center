<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Choose;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Treatment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $images= Gallery::where('status',1)->whereIn('title',['Dream','Students'])->get();
        $teams=Team::where('status',1)->limit(6)->get();
        $packages= Package::where('status',1)->get();
        $sliders= Slider::where('status',1)->get();
        $testimonials = Testimonial::where('status', 1)->where('is_delete', 1)->get();
        $logos= Logo::where('status',1)->get();
        $treatments= Treatment::where('status',1)->get();
        $about= About::first();
        $choose=Choose::first();
        return view('frontend.pages.home',compact('images','packages','sliders','teams', 'testimonials','logos','treatments','about','choose'));
    }
}
