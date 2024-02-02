<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class Register extends Controller
{
    public function register()
    {
        return view('signup');
    }

    public function actionRegister(Request $request)
    {
        $users = User::create([
            'name' => ucwords(trans($request->name)),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Session::flash('message', 'Register Successfully!');
        return view('signup');
    }
}
