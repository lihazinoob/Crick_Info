<?php

namespace App\Http\Controllers;

use App\Models\playerinfo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function discovergenre()
    {
        return view('discover');
    }
    public function players()
    {
        return view('players');
    }
    public function showparticularplayer($id)
    {
        // return view('particularplayer');
        $player = playerinfo::find($id);
        return view('particularplayer',compact('player'));
    }

    public function showteamlistinuserpanel()
    {
        return view('teamlist');
    }
}
