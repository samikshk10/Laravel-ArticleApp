<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    function registeruser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',

        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('login');
    }

    function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',

        ]);

        $valid = User::where('email', $request->email)->first();

        if ($valid) {

            if (Hash::check($request->password, $valid->password)) {


                return redirect('/')->with('name', $valid->name);
            } else {
                return back()->with('fail', 'Password Not Matched');
            }
        } else {
            return back()->with('fail', 'User Not Found');
        }
    }
}
