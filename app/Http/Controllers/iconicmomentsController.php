<?php

namespace App\Http\Controllers;

use App\Models\iconicmoments;
use Illuminate\Http\Request;

class iconicmomentsController extends Controller
{
    public function showtheiconicmoments()
    {
        $iconicmoments = iconicmoments::get();
        //  dd($iconicmoments ->all());
        return view('homepage',['iconicmoments'=>$iconicmoments]);
    }
    public function store(Request $request)
    {
        // validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'author' => 'required',
            'title' => 'required',
            'topic' => 'required',
            'description' => 'required',
        ]);




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
        return back()->with('success','Iconic Moment has been added successfully');
    }

    public function updateiconicmoments($id)
    {
        // dd($id);
        $iconicmoments = iconicmoments::find($id);
        return view('updateiconicmoments',['iconicmoments'=>$iconicmoments]);
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $iconicmoments = iconicmoments::find($id);
        if(isset($request->image))
        {
            
            $imagename = time().'.'.$request->image->extension();
            $request->image->move(public_path('iconicmoments'),$imagename);
            $iconicmoments->image = $imagename;
        }
        $iconicmoments->author = $request->author;
        $iconicmoments->title = $request->title;
        $iconicmoments->topic = $request->topic;
        $iconicmoments->description = $request->description;
        $iconicmoments->save();
        return back()->with('success','Iconic Moment has been updated successfully');
    }
    public function delete($id)
    {
        $iconicmoments = iconicmoments::find($id);
        $iconicmoments->delete();
        return back()->with('success','Iconic Moment has been deleted successfully');
    }
}
