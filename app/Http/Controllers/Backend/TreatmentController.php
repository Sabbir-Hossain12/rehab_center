<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatments = Treatment::all();

        return view('backend.pages.treatment.index', compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.treatment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//   dd($request->all());
        $treat = new Treatment();

        $treat->treat_title = $request->treat_title;
        $treat->treat_desc= $request->treat_desc;
        $treat->status = $request->status;


        if ($request->file('treat_img')) {
            $thumbnail = $request->file('treat_img');

            $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
            $imagePath = 'public/backend/images/treatment/';
            $thumbnail->move($imagePath, $imageName);

            $treat->treat_img = $imagePath.$imageName;
        }

        $treat->save();

        return redirect()->route('treatment.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Treatment $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Treatment $treatment)
    {
        return view('backend.pages.treatment.edit', compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Treatment $treatment)
    {

        $treatment->treat_title = $request->treat_title;
        $treatment->treat_desc= $request->treat_desc;
        $treatment->status = $request->status;

            if ($request->file('treat_img')) {
                $thumbnail = $request->file('treat_img');

                if (!is_null($treatment->treat_img) && file_exists($treatment->treat_img)) {
                    unlink($treatment->treat_img); // Delete the existing thumbnail
                }

                $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
                $imagePath = 'public/backend/images/treatment/';
                $thumbnail->move($imagePath, $imageName);

                $treatment->treat_img = $imagePath.$imageName;
            }

        $treatment->save();

            return redirect()->route('treatment.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Treatment $treatment)
    {
        if (!is_null($treatment->treat_img)) {
            unlink($treatment->treat_img);
        }

        $treatment->delete();

        return redirect()->back();
    }
}
