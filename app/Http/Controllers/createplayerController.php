<?php

namespace App\Http\Controllers;

use App\Models\internationalteams;
use Illuminate\Http\Request;
use App\Models\playerinfo;

class createplayerController extends Controller
{
    
    public function showtheplayersinuserpanel()
    {
        // return view('players');
        $players = playerinfo::get();
        // dd($players->all());
        return view('players',['players'=>$players]);
    }

    public function storetheplayersinadminpanel(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'full-name' => 'required',
            'birth-date' => 'required',
            'playing-role' => 'required',
            'country' => 'required',
            'international_team'=>'required'
        ]);
        //Accessing the team_id of international teams by the name of the international team of any particular player.
        $internationalteam = internationalteams::where('teamname',$request->international_team)->first();
        //  dd($request->all());
        //dd($internationalteam->id);
        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('playersinfo'),$imagename);
        // dd($imagename);
        // Add the info to database
        $playerinfo = new playerinfo();
        $playerinfo->image = $imagename;
        $playerinfo->full_name = $request->input('full-name');
        $playerinfo->birth_date = $request->input('birth-date');
        $playerinfo->batting_style = $request->input('batting-style');
        $playerinfo->bowling_style = $request->input('bowling-style');
        $playerinfo->playing_role = $request->input('playing-role');
        $playerinfo->country = $request->input('country');
        $playerinfo->international_team_id = $internationalteam->id;
        $playerinfo->save();

    }
}
