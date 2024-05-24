<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function manage()
    {
        $teams = Team::all();
        
        return view('backend.pages.team.manage', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.team.create-team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $team = new Team();

        if( !is_null( $team ) ){
            $team->team_name        =  $request->team_name ;
            $team->designation    =  $request->designation ;
            $team->twitter_link       =  $request->twitter_link ;
            $team->facebook_link        =  $request->facebook_link ;
            $team->google_link     =  $request->google_link  ;
            $team->instagram_link       =  $request->instagram_link ;
            $team->status       =  $request->status ;
            
            if( $request->file('team_img') ){
                $thumbnail          = $request->file('team_img');

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $team->team_img          = $imagePath . $imageName;
            }
            
            $team->save();

            return redirect()->route('team.manage');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);
        return view('backend.pages.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::find($id);

        if( !is_null($team) ){
          
            $team->designation    =  $request->designation ;
            $team->twitter_link       =  $request->twitter_link ;
            $team->facebook_link        =  $request->facebook_link ;
            $team->google_link     =  $request->google_link  ;
            $team->instagram_link       =  $request->instagram_link ;
            $team->status       =  $request->status ;
            $team->team_name        =  $request->team_name ;
            if( $request->file('team_img') ){
                $thumbnail          = $request->file('team_img');

                if ( !is_null($team->team_img) && file_exists($team->team_img))  {
                    unlink($team->team_img); // Delete the existing thumbnail
                }

                $imageName          = microtime('.') . '.' . $thumbnail->getClientOriginalExtension();
                $imagePath          = 'public/backend/images/';
                $thumbnail->move($imagePath, $imageName);

                $team->team_img = $imagePath . $imageName;
            }

            $team->save();

            return redirect()->route('team.manage');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);

        if( !is_null($team) ){

            if( !is_null( $team->team_img ) ){
                unlink( $team->team_img );
            }

            $team->delete();

            return redirect()->back();
        }
    }
    
    public function teamList()
    {
        $teams = Team::get();

        return view('frontend.pages.team', compact('teams'));
    }

   
}
