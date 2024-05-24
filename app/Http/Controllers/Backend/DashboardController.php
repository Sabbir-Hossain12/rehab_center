<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $blogCount= Blog:: count();
        $galleriesCount= Gallery::count();
        $teamCount= Team::count();
        $contactCount= Contact::count();
        return view('backend.pages.dashboard',compact('blogCount','galleriesCount','teamCount','contactCount'));
    }
}
