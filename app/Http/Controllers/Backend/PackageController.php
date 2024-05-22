<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function manage()
    {
        $data = Package::get();

        return view('backend.pages.package.manage', ['data' => $data]);
    }

    public function create()
    {
        return view('backend.pages.package.create-package');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'status' => 'required',
                'pack_name' => 'required',
                'pack_price' => 'required',
                'duration' => 'required',
                
            ]
        );

        $package = new Package();
        if (!is_null($package)) {
            $package->pack_name = $request->pack_name;
            $package->pack_price = $request->pack_price;
            $package->duration = $request->duration;
            $package->content = $request->content;
            $package->btn_1 = $request->btn_1;
            $package->status = $request->status;

            $package->save();

            return redirect()->route('package.manage');
        }
    }

    public function edit(string $id)
    {
        $package = Package::find($id);
        return view('backend.pages.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

//        $request->validate(
//            [
//                'status' => 'required',
//                'pack_name' => 'required',
//                'pack_price' => 'required',
//                'duration' => 'required',
//
//            ]
//        );
//        
        $package = Package::find($id);
        
        if (!is_null($package)) {
            $package->pack_name = $request->pack_name;
            $package->pack_price = $request->pack_price;
            $package->duration = $request->duration;
            $package->content = $request->content;
            $package->btn_1 = $request->btn_1;
            $package->status = $request->status;

            $package->save();
      
            

            return redirect()->route('package.manage');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::find($id);

        if (!is_null($package)) {
            if (!is_null($package->img_path)) {
                unlink($package->img_path);
            }

            $package->delete();

            return redirect()->back();
        }
    }


    public function packageList()
    {
        $packages = Package::where('status', 1)->get();
        return view('frontend.pages.pricing-plan',['packages'=>$packages]);
    }

}
