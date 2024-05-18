<?php

namespace App\Http\Controllers;

use App\Models\iconicmoments;
use App\Models\playerinfo;
use Illuminate\Http\Request;
use App\Models\internationalteams;
use App\Models\place;
use App\Models\fav;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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
        return view('particularplayer', compact('player'));
    }

    public function showteamlistinuserpanel()
    {
        $teams = internationalteams::get();
        return view('TeamList', ['teams' => $teams]);
    }
    public function showparticularIntlteam($id)
    {
        $team = internationalteams::with('playerinfos')->find($id);
        return view('/particularIntlTeam', compact('team'));
    }

    public function showadminpanel()
    {
        return view('adminpanel');
    }

    public function showtheiconicmomentsinadminpanel()
    {
        $iconicmoments = iconicmoments::get();
        return view('storeiconicmoments', ['iconicmoments' => $iconicmoments]);
    }

    public function showthestadiumsinadminpanel()
    {
        $stadiums = place::get();
        return view('storestadiums', ['stadiums' => $stadiums]);
    }

    public function showstadiumlistinuserpanel()
    {
      $stadium = place::get();
      return view('stadiums', ['stadium' => $stadium]);  
      
    }

    
}
