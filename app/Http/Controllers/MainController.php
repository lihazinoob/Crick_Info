<?php

namespace App\Http\Controllers;

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
    public function showparticularplayer()
    {
        return view('particularplayer');
    }
}
