<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\internationalteams;
class createIntlTeamController extends Controller
{


    public function storetheteamsinadminpanel(Request $request)
    {
        //   dd($request->all());
        //validate the request
        $request->validate([
            'teamname' => 'required',
            'teamicon' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'teamdescription' => 'required',
            'teamcoverimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        //  dd($request->all());

        $iconname = time().'.'.$request->teamicon->extension();
        $request->teamicon->move(public_path('teamicons'),$iconname);
        $coverimagename = time().'.'.$request->teamcoverimage->extension();
        $request->teamcoverimage->move(public_path('teamcoverimages'),$coverimagename);
        //  dd($iconname,$coverimagename);
        // Add the info to database
        // Adding the model to the controller.
        $internationalteams = new internationalteams();
        $internationalteams->teamname = $request->input('teamname');
        $internationalteams->teamicon = $iconname;
        $internationalteams->teamdescription = $request->input('teamdescription');
        $internationalteams->teamcoverimage = $coverimagename;
        $internationalteams->save();  
    }
}
