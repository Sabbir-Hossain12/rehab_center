<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contactUs(Request $request)
    {
        $contacts = new Contact();

        if( !is_null( $contacts ) ){
            $contacts->name      = $request->name;
            $contacts->email     = $request->email;
            $contacts->subject   = $request->subject;
            $contacts->message   = $request->message;
            $contacts->status    = 1;

            $contacts->save();
        }

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function manage()
    {
        $contacts = Contact::where('status', 1)->orderBy('id', 'desc')->get();
        return view('backend.pages.contact-us', compact('contacts'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);

        if( $contact ){
            $contact->delete();

            return redirect()->back();
        }
    }
}
