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
        $users = auth()->user();
        // dd($players->all());
        return view('players', [
            'players' => $players,
            'users' => $users
        ]);
    }

    public function storetheplayersinadminpanel(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'full-name' => 'required',
            'birth-date' => 'required',
            'playing-role' => 'required',
            'country' => 'required',
            'international_team' => 'required'
        ]);
        //Accessing the team_id of international teams by the name of the international team of any particular player.
        $internationalteam = internationalteams::where('teamname', $request->international_team)->first();
        //  dd($request->all());
        //dd($internationalteam->id);
        $imagename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('playersinfo'), $imagename);
        // dd($imagename);
        // Add the info to database
        $playerinfo = new playerinfo();
        $playerinfo->image = $imagename;
        $playerinfo->full_name = $request->input('full-name');
        $playerinfo->birth_date = $request->input('birth-date');
        $playerinfo->batting_style = $request->input('batting-style');
        $playerinfo->bowling_style = $request->input('bowling-style');
        $playerinfo->playing_role = $request->input('playing-role');
        $playerinfo->facebook = $request->input('facebook_link');
        $playerinfo->twitter = $request->input('twitter_link');
        $playerinfo->instagram = $request->input('instagram_link');
        $playerinfo->testmatches = $request->input('test_matches');
        $playerinfo->testruns = $request->input('test_runs');
        $playerinfo->testwickets = $request->input('test_wickets');
        // $playerinfo->testaverage = $request->input('test_runs')/ $request->input('test_matches');
        $playerinfo->odimatches = $request->input('odi_matches');
        $playerinfo->odiruns = $request->input('odi_runs');
        $playerinfo->odiwickets = $request->input('odi_wickets');
        // $playerinfo->odiaverage = $request->input('odi_runs')/ $request->input('odi_matches');
        $playerinfo->t20matches = $request->input('t20_matches');
        $playerinfo->t20runs = $request->input('t20_runs');
        $playerinfo->t20wickets = $request->input('t20_wickets');
        // $playerinfo->t20average = $request->input('t20_runs')/ $request->input('t20_matches');
        $playerinfo->country = $request->input('country');
        $playerinfo->international_team_id = $internationalteam->id;
        $playerinfo->save();
        return redirect('/storeplayers')->with('message', 'Player Added Successfully');
    }
}
