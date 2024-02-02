<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class Login extends Controller
{
    public function login(){
        if(Auth::check()) {
            //return redirect('profile');
            return redirect('admin.index');
        } else {
            return view('login')->with('message', 'Incorrect username or password');
        }
    }

    public function actionLogin(Request $request){
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        if(Auth::Attempt($data)){
            //return redirect('profile');
            return redirect('admin');
        } else {
            Session::flash('error', 'Login failed');
            return redirect('/');
        }
    }

    public function logoutAction(){
        Auth::logout();
        return redirect('/');
    }
}
