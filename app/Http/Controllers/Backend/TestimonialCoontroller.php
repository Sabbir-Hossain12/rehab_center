<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Str;

class TestimonialCoontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function manage()
    {
        $testimonials = Testimonial::all();
        return view('backend.pages.testimonial.manage', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();

        if( !is_null( $testimonial ) ){
            $testimonial->name           =  $request->name;
            $testimonial->address        =  $request->address;
            $testimonial->description    =  $request->description;
            $testimonial->status         =  $request->status;

            if( $request->file('image') ){
                $thumbnail              = $request->file('image');

                $imageName              = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath              = 'public/backend/testimonial/';
                $thumbnail->move($imagePath, $imageName);

                $testimonial->img       = $imagePath . $imageName;
            }

            // dd( $testimonial);
            $testimonial->save();

            return redirect()->route('testimonial.manage');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.pages.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = Testimonial::find($id);

        if( !is_null($testimonial) ){
            $testimonial->name           =  $request->name;
            $testimonial->address        =  $request->address;
            $testimonial->description    =  $request->description;
            $testimonial->status         =  $request->status;


            if( $request->file('image') ){
                $thumbnail          = $request->file('image');

                if ( !is_null($testimonial->img) && file_exists($blog->img))  {
                    unlink($testimonial->img); // Delete the existing thumbnail
                }

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/testimonial/';
                $thumbnail->move($imagePath, $imageName);

                $testimonial->img          = $imagePath . $imageName;
            }

            $testimonial->save();

            return redirect()->route('testimonial.manage');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::find($id);

        if( !is_null($testimonial) ){

            if( !is_null( $testimonial->img ) ){
                unlink( $testimonial->img );
            }

            $testimonial->delete();

            return redirect()->back();
        }
    }
}
