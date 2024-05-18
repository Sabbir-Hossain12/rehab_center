<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $images= Gallery::where('status',1)->limit(8)->get();
        
        
        return view('frontend.pages.home',compact('images'));
    }
}
