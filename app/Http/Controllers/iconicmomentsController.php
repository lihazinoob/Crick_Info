<?php

namespace App\Http\Controllers;

use App\Models\iconicmoments;
use Illuminate\Http\Request;

class iconicmomentsController extends Controller
{
    public function showtheiconicmoments()
    {
        return view('homepage');
    }
    public function store(Request $request)
    {
        // dd ($request->all());
        $imagename = time().'.'.$request->image->extension();
        $request->image->move(public_path('iconicmoments'),$imagename);
        // dd($imagename);

        // Add the image to database
        $iconicmoments = new iconicmoments();
        $iconicmoments->image = $imagename;
        $iconicmoments->author = $request->author;
        $iconicmoments->title = $request->title;
        $iconicmoments->topic = $request->topic;
        $iconicmoments->description = $request->description;
        $iconicmoments->save();
    }
}
