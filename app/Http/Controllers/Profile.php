<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Profile extends Controller
{
    public function index(){
        if(Auth::check()) {
            return view('profile');
        } else {
            abort(403);
        }
        
    }
    public function edit($id){
        $user = User::find($id);

        return view('profileEdit', compact('user'));
    }
    public function profileUpdate($id, Request $request){
        $user = User::find($id);
        $user->update($request->except(['_token', 'submit']));
        return redirect('/profile');
    }
    public function changeImage(){
        return view('changeImage');
    }
    public function uploadImage($id, Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg, jpg, png|max: 2048'
        ]);

        $filename = time() . '.' . $id . '.' . $request->image->extension();
        
        $request->image->storeAs('public/userImages', $filename);

        // $user = new User;
        $user = User::find($id);
        $user->image = $filename;
        $user->save();

        return redirect('/profile');
    }

    public function RestrictedPage() {
        return redirect('404');
    }
}
