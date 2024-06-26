<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('backend.pages.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $about = About::first();

        $about->title = $request->title;
        $about->text_1 = $request->text_1;
        $about->text_2 = $request->text_2;
        $about->text_3 = $request->text_3;
        $about->img_link = $request->img_link;
        $about->years = $request->years;
        $about->customers = $request->customers;

        if ($request->file('side_img')) {
            $thumbnail = $request->file('side_img');

            if (!is_null($about->side_img) && file_exists($about->side_img)) {
                unlink($about->side_img); // Delete the existing thumbnail
            }

            $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
            $imagePath = 'public/backend/images/abouts/';
            $thumbnail->move($imagePath, $imageName);

            $about->side_img = $imagePath.$imageName;
        }

        $about->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
