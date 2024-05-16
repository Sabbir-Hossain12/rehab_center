<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GellaryController extends Controller
{
    public function manage()
    {
        $data= Gallery::where('status',1)->get();
        
        return view('backend.pages.gallery.manage',['data'=>$data]);
    }
}
