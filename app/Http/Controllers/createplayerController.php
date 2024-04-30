<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\playerinfo;

class createplayerController extends Controller
{
    
    public function showtheplayersinuserpanel()
    {
        return view('players');
    }

    public function storetheplayersinadminpanel(Request $request)
    {
        // validate the request
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        //     'full_name' => 'required',
        //     'birth_date' => 'required',
        //     'playing_role' => 'required',
        //     'country' => 'required',
        // ]);

        dd ($request->all());
        // $imagename = time().'.'.$request->image->extension();
        // $request->image->move(public_path('playerinfos'),$imagename);
        // dd($imagename);

        // Add the image to database
       
        // $playerinfos = new playerinfo();
        // $playerinfos->image = $imagename;
        // $playerinfos->full_name = $request->full_name;
        // $playerinfos->birth_date = $request->birth_date;
        // $playerinfos->playing_role = $request->playing_role;
        // $playerinfos->country = $request->country;
        // $playerinfos->save();
    }
}
