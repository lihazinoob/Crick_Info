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

    public function showparticularstadium($id)
    {
        $stadium = place::find($id);
        return view('particularstadium', compact('stadium'));
    }


    // Add to list feature implementation
    public function addtothelist($userId, $playerId)
    {
        // Find the user
        $user = User::find($userId);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Check if the player is already in the user's favorites
        $existingFavorite = $user->favorites()->where('player_id', $playerId)->first();

        if ($existingFavorite) {
            return redirect()->back()->with('error', 'Player is already in your favorites.');
        }

        try {
            // Add player to favorites
            $favorite = new Fav();
            $favorite->user_id = $userId;
            $favorite->player_id = $playerId;
            $favorite->save();

            return redirect()->back()->with('success', 'Player added to your favorites.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add player to favorites.');
        }
    }


    public function showyourlist($userid)
    {
        // dd($userid);
        $user = User::find($userid);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        // Assuming you have a relationship set up in your User model
        $favorites = $user->favorites()->with('player')->get();

        // Check if the user has any favorite players
        if ($favorites->isEmpty()) {
            return view('favlist', ['message' => 'No favorite players found.']);
        }

        return view('favlist', compact('favorites'));
    }
}
