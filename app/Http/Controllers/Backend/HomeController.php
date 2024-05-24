<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $images= Gallery::where('status',1)->limit(8)->get();
        $teams=Team::where('status',1)->limit(6)->get();
        $packages= Package::where('status',1)->get();
        $sliders= Slider::where('status',1)->get();
        return view('frontend.pages.home',compact('images','packages','sliders','teams'));
    }
}
