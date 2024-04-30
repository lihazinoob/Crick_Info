<?php

namespace App\Http\Controllers;

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
        ]);
        // dd($request->all());
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
        $playerinfo->save();

    }
}
