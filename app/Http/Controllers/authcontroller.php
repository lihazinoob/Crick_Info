<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class authcontroller extends Controller
{
    //
    public function authenticationprocess()
    {
        return view('login');
    }

    public function loginaction(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/homepage')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
    public function registeruser(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password

        $formFields['password'] = bcrypt($formFields['password']);

        // Create User

        $user = User::create($formFields);

        // Login

        auth()->login($user);

        return redirect('/')->with('message', 'User Created and logged in');
    }

    public function login()
    {
        return view('register');
    }
    
}
