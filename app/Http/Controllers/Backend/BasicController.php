<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Basic;
use Illuminate\Http\Request;

class BasicController extends Controller
{
   

    public function create()
    {
        $basics= Basic::first();
        return view('backend.pages.basic.create-basic',compact('basics'));
    }

    public function update(Request $request)
    {


        $basic =Basic::first();

        if( !is_null($basic) ){
            $basic->address  = $request->address ;
            $basic->phone_1 = $request->phone_1;
            $basic->phone_2 = $request->phone_2;
            $basic->email = $request->email;
            $basic->website = $request->website;
            $basic->fb_link = $request->fb_link;
            $basic->twitter_link = $request->twitter_link;
            $basic->instagram_link = $request->instagram_link;
            $basic->business_opening = $request->business_opening;
            $basic->business_closing = $request->business_closing;

            $basic->service_1 = $request->service_1;
            $basic->service_2 = $request->service_2;
            $basic->service_3 = $request->service_3;
            
            
            

            if( $request->file('logo_img') ){
                $thumbnail          = $request->file('logo_img');

                if ( !is_null($basic->logo_img) && file_exists($basic->logo_img))  {
                    unlink($basic->logo_img); // Delete the existing thumbnail
                }

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $basic->logo_img = $imagePath . $imageName;
            }

            $basic->save();

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */



  
}
