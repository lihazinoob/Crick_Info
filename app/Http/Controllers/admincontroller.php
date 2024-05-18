<?php

namespace App\Http\Controllers;

use App\Models\internationalteams;
use App\Models\place;
use App\Models\playerinfo;
use Illuminate\Http\Request;
use App\Models\stadium;

class admincontroller extends Controller
{
    public function storestadium(Request $request)
    {
        // dd($request->all());
        // Validate the request...
       
        // request()->validate([
        //     'Coverpicture' => 'required',
        //     'Profilepicture' => 'required',
        //     'Stadiumname' => 'required',
        //     'Location' => 'required',
        //     'Capacity' => 'required',
        //     'description' => 'required',
        //     'topmomenttext1' => 'required',
        //     'topmomentimage1' => 'required',
        //     'topmomenttext2' => 'required',
        //     'topmomentimage2' => 'required',
        //     'topmomenttext3' => 'required',
        //     'topmomentimage3' => 'required',
        //     'topmomenttext4' => 'required',
        //     'topmomentimage4' => 'required',
        //     'feautretext' => 'required',
        //     'featuredescription' => 'required',
        //     'featureimage' => 'required',
        // ]);

        // Store the stadium in the database...
        $coverpicture = time().'.'.$request->Coverpicture->extension();
        $request->Coverpicture->move(public_path('stadium'),$coverpicture);
        // dd($coverpicture);
        $profilepicture = time().'.'.$request->Profilepicture->extension();
        $request->Profilepicture->move(public_path('stadium'),$profilepicture);
        // dd($profilepicture);
        $stadium = new place();
        $stadium->coverpicture = $coverpicture;
        $stadium->profilepicture = $profilepicture;
        $stadium->stadiumname = $request->Stadiumname;
        $stadium->stadiumlocation = $request->Location;
        $stadium->stadiumcapacity = $request->Capacity;
        $stadium->stadiumdescription = $request->description;
        $stadium->topmomenttext1 = $request->topmomenttext1;
        $topmomentimage1 = time().'.'.$request->topmomentimage1->extension();
        $request->topmomentimage1->move(public_path('stadium'),$topmomentimage1);
        $stadium->topmomentpicture1 = $topmomentimage1;
        $stadium->topmomenttext2 = $request->topmomenttext2;
        $topmomentimage2 = time().'.'.$request->topmomentimage2->extension();
        $request->topmomentimage2->move(public_path('stadium'),$topmomentimage2);
        $stadium->topmomentpicture2 = $topmomentimage2;
        $stadium->topmomenttext3 = $request->topmomenttext3;
        $topmomentimage3 = time().'.'.$request->topmomentimage3->extension();
        $request->topmomentimage3->move(public_path('stadium'),$topmomentimage3);
        $stadium->topmomentpicture3 = $topmomentimage3;
        $stadium->topmomenttext4 = $request->topmomenttext4;
        $topmomentimage4 = time().'.'.$request->topmomentimage4->extension();
        $request->topmomentimage4->move(public_path('stadium'),$topmomentimage4);
        $stadium->topmomentpicture4 = $topmomentimage4;
        $stadium->feautretext = $request->featuretext;
        $stadium->featuredescription = $request->featuredescription;
        $featureimage = time().'.'.$request->featureimage->extension();
        $request->featureimage->move(public_path('stadium'),$featureimage);
        $stadium->featurepicture = $featureimage;
        $stadium->save();
        return back()->with('success','Stadium has been added successfully');

    }

    public function updatestadium($id)
    {
        // dd($id);
        $stadium = place::find($id);
        return view('updatestadium',['stadium'=>$stadium]);
    }
    public function update(Request $request,$id)
    {
        //   dd($request->all());
        $stadium = place::find($id);
        if(isset($request->Coverpicture))
        {
            $coverpicture = time().'.'.$request->Coverpicture->extension();
            $request->Coverpicture->move(public_path('stadium'),$coverpicture);
            $stadium->coverpicture = $coverpicture;
            $profilepicture= time().'.'.$request->Profilepicture->extension();
            $request->Profilepicture->move(public_path('stadium'),$profilepicture);
            $stadium->profilepicture = $profilepicture;
            $topmomentimage1 = time().'.'.$request->topmomentimage1->extension();
            $request->topmomentimage1->move(public_path('stadium'),$topmomentimage1);
            $stadium->topmomentpicture1 = $topmomentimage1;
            $topmomentimage2 = time().'.'.$request->topmomentimage2->extension();
            $request->topmomentimage2->move(public_path('stadium'),$topmomentimage2);
            $stadium->topmomentpicture2 = $topmomentimage2;
            $topmomentimage3 = time().'.'.$request->topmomentimage3->extension();
            $request->topmomentimage3->move(public_path('stadium'),$topmomentimage3);
            $stadium->topmomentpicture3 = $topmomentimage3;
            $topmomentimage4 = time().'.'.$request->topmomentimage4->extension();
            $request->topmomentimage4->move(public_path('stadium'),$topmomentimage4);
            $stadium->topmomentpicture4 = $topmomentimage4;
            $featureimage = time().'.'.$request->featureimage->extension();
            $request->featureimage->move(public_path('stadium'),$featureimage);
            $stadium->featurepicture = $featureimage;
        }
        $stadium->stadiumname = $request->Stadiumname;
        $stadium->stadiumlocation = $request->Location;
        $stadium->stadiumcapacity = $request->Capacity;
        $stadium->stadiumdescription = $request->description;
        $stadium->topmomenttext1 = $request->topmomenttext1;
        $stadium->topmomenttext2 = $request->topmomenttext2;
        $stadium->topmomenttext3 = $request->topmomenttext3;
        $stadium->topmomenttext4 = $request->topmomenttext4;
        $stadium->feautretext = $request->featuretext;
        $stadium->featuredescription = $request->featuredescription;
        $stadium->save();
        return back()->with('success','Stadium has been updated successfully');
    }
    public function delete($id)
    {
        $stadium = place::find($id);
        $stadium->delete();
        return back()->with('success','Stadium has been deleted successfully');
    }

    public function showtheIntlteamsinadminpanel()
    {
        $internationalteams = internationalteams::all();
        return view('storeintlteams',['internationalteams'=>$internationalteams]);
    }

    public function updateIntlteam($id)
    {
        $internationalteams = internationalteams::find($id);
        return view('updateIntlteam',['internationalteams'=>$internationalteams]);
    }

    public function updateIntlteaminadmin(Request $request,$id)
    {
        $internationalteams = internationalteams::find($id);
        if(isset($request->teamicon))
        {
            $teamicon = time().'.'.$request->teamicon->extension();
            $request->teamicon->move(public_path('teamicons'),$teamicon);
            $internationalteams->teamicon = $teamicon;
        }
        else if(isset($request->teamcoverimage))
        {
            $teamcoverimage = time().'.'.$request->teamcoverimage->extension();
            $request->teamcoverimage->move(public_path('teamcoverimages'),$teamcoverimage);
            $internationalteams->teamcoverimage = $teamcoverimage;
        }
        $internationalteams->teamname = $request->teamname;
        $internationalteams->teamdescription = $request->teamdescription;
        $internationalteams->save();
        return redirect('/listofIntlteams')->with('success','Team has been updated successfully');

    }

    public function deleteIntlteam($id)
    {
        $internationalteams = internationalteams::find($id);
        $internationalteams->delete();
        return back()->with('success','Team has been deleted successfully');
    }
    
    public function showtheplayersinadminpanel()
    {
        $players = playerinfo::all();
        return view('/storeplayers',['players'  => $players]);
    }
    public function updateplayershow($id)
    {
        $players= playerinfo::find($id);
        
        return view('updateplayer',['players'=>$players]);
    }
    public function updateplayerinadminpanel(Request $request,$id)
    {
        $players = playerinfo::find($id);
        if(isset($request->image))
        {
            $image = time().'.'.$request->image->extension();
            $request->image->move(public_path('playersinfo'),$image);
            $players->image = $image;
        }
        $players->full_name = $request->input('full-name');
        $players->birth_date = $request->input('birth-date');
        $players->batting_style = $request->input('batting-style');
        $players->bowling_style = $request->input('bowling-style');
        $players->playing_role = $request->input('playing-role');
        $players->country = $request->input('country');
        $players->save();
        return redirect('/storeplayers')->with('success','Player has been updated successfully');
    }

   
}
