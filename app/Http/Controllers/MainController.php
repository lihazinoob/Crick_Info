<?php

namespace App\Http\Controllers;

use App\Models\playerinfo;
use Illuminate\Http\Request;
use App\Models\internationalteams;
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
        $teams = internationalteams::get();
        return view('TeamList',['teams'=>$teams]);
    }
    public function showparticularIntlteam($id)
    {
       $team = internationalteams::with('playerinfos')->find($id);
       return view ('/particularIntlTeam',compact('team'));
    }

    
    

}
