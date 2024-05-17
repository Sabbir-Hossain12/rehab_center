<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GellaryController extends Controller
{
    public function manage()
    {
        $data = Gallery::get();

        return view('backend.pages.gallery.manage', ['data' => $data]);
    }

    public function create()
    {
        return view('backend.pages.gallery.create-gallery');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'status' => 'required',
                'thumbnail' => 'required'
            ]
        );

        $gallery = new Gallery();
        if (!is_null($gallery)) {
            $gallery->title = $request->title;
            $gallery->status = $request->status;

            if ($request->file('thumbnail')) {
                $thumbnail = $request->file('thumbnail');

                $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
                $imagePath = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $gallery->img_path = $imagePath.$imageName;
            }


            $gallery->save();

            return redirect()->route('gallery.manage');
        }
    }

    public function edit(string $id)
    {
        $gallery = Gallery::find($id);
        return view('backend.pages.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        
        $gallery = Gallery::find($id);

        if( !is_null($gallery) ){
            $gallery->title       =  $request->title;
            $gallery->status      =  $request->status;

            if( $request->file('thumbnail') ){
                $thumbnail          = $request->file('thumbnail');

                if ( !is_null($gallery->thumbnail) && file_exists($blog->thumbnail))  {
                    unlink($gallery->thumbnail); // Delete the existing thumbnail
                }

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $gallery->img_path = $imagePath . $imageName;
            }

            $gallery->save();

            return redirect()->route('gallery.manage');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);

        if( !is_null($gallery) ){

            if( !is_null( $gallery->img_path ) ){
                unlink( $gallery->img_path );
            }

            $gallery->delete();

            return redirect()->back();
        }
    }
    
    
}
