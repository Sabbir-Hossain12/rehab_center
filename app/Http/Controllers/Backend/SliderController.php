<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function manage()
    {
        $data = Slider::get();

        return view('backend.pages.slider.manage', ['data' => $data]);
    }

    public function create()
    {
        return view('backend.pages.slider.create-slider');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'slider_img'=>'required',
                'slider_title'=> 'required',
                'slider_desc'=> 'required',
                'status'=> 'required',
                
            ]
        );

        $slider = new Slider();
        if (!is_null($slider)) {
            $slider->slider_title = $request->slider_title;
            $slider->slider_desc = $request->slider_desc;
            $slider->status = $request->status;

            if ($request->file('slider_img')) {
                $thumbnail = $request->file('slider_img');

                $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
                $imagePath = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $slider->slider_img = $imagePath.$imageName;
            }


            $slider->save();

            return redirect()->route('slider.manage');
        }
    }

    public function edit(string $id)
    {
        $slider = Slider::find($id);
        return view('backend.pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $slider = Slider::find($id);

        if( !is_null($slider) ){
            $slider->slider_title = $request->slider_title;
            $slider->slider_desc = $request->slider_desc;
            $slider->status = $request->status;

            if( $request->file('slider_img') ){
                $thumbnail          = $request->file('slider_img');

                if ( !is_null($slider->slider_img) && file_exists($slider->slider_img))  {
                    unlink($slider->slider_img); // Delete the existing thumbnail
                }

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $slider->img_path = $imagePath . $imageName;
            }

            $slider->save();

            return redirect()->route('slider.manage');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);

        if( !is_null($slider) ){

            if( !is_null( $slider->img_path ) ){
                unlink( $slider->img_path );
            }

            $slider->delete();

            return redirect()->back();
        }
    }



    public function galleryList()
    {
        $images= Gallery::where('status',1)->get();
        return view('frontend.pages.gallery',compact('images'));
    }
}
