<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = Logo::all();

        return view('backend.pages.logo.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $logo = new Logo();

        $logo->logo_title = $request->logo_title;
        $logo->status = $request->status;


        if ($request->file('logo_img')) {
            $thumbnail = $request->file('logo_img');

            $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
            $imagePath = 'public/backend/images/logo/';
            $thumbnail->move($imagePath, $imageName);

            $logo->logo_img = $imagePath.$imageName;
        }

        $logo->save();

        return redirect()->route('logo.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        return view('backend.pages.logo.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        if (!is_null($logo)) {
            $logo->logo_title = $request->logo_title;
            $logo->status = $request->status;

            if ($request->file('logo_img')) {
                $thumbnail = $request->file('logo_img');

                if (!is_null($logo->logo_img) && file_exists($logo->logo_img)) {
                    unlink($logo->logo_img); // Delete the existing thumbnail
                }

                $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
                $imagePath = 'public/backend/images/logo/';
                $thumbnail->move($imagePath, $imageName);

                $logo->logo_img = $imagePath.$imageName;
            }

            $logo->save();

            return redirect()->route('logo.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        if (!is_null($logo->logo_img)) {
            unlink($logo->logo_img);
        }

        $logo->delete();

        return redirect()->back();
    }
}
