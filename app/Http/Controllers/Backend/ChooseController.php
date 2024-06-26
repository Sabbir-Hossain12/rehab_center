<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Choose;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $choose = Choose::first();
        return view('backend.pages.choose.index', compact('choose'));
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
        
        $choose = Choose::first();

        $choose->title_1 = $request->title_1;
        $choose->title_2 = $request->title_2;
        $choose->title_3 = $request->title_3;
        $choose->title_4 = $request->title_4;
        $choose->title_5 = $request->title_5;

        $choose->text_1 = $request->text_1;
        $choose->text_2 = $request->text_2;
        $choose->text_3 = $request->text_3;
        $choose->text_4 = $request->text_4;
        $choose->text_5 = $request->text_5;
        $choose->text_6 = $request->text_6;

        if ($request->file('img_1')) {
            $thumbnail = $request->file('img_1');

            if (!is_null($choose->img_1) && file_exists($choose->img_1)) {
                unlink($choose->img_1); // Delete the existing thumbnail
            }

            $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
            $imagePath = 'public/backend/images/choose/';
            $thumbnail->move($imagePath, $imageName);

            $choose->img_1 = $imagePath.$imageName;
        }

        if ($request->file('img_2')) {
            $thumbnail = $request->file('img_2');

            if (!is_null($choose->img_2) && file_exists($choose->img_2)) {
                unlink($choose->img_2); // Delete the existing thumbnail
            }

            $imageName = microtime('.').'.'.$thumbnail->getClientOriginalExtension();
            $imagePath = 'public/backend/images/choose/';
            $thumbnail->move($imagePath, $imageName);

            $choose->img_2 = $imagePath.$imageName;
        }

        $choose->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Choose $choose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Choose $choose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Choose $choose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Choose $choose)
    {
        //
    }
}
