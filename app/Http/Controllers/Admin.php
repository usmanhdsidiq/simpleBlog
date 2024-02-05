<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Session;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if(Auth::check()) {
            $user_id = Auth::id();
            $admin = Blog::where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();

            return view('admin/admin_home', ['admin' => $admin]);
        } else {
            abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin/admin_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'subject' => 'required',
            'user_id' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg, jpg, png, gif, svg|max:5120',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        dd(Blog::create($input));

        return redirect()->route('admin.index')->with('success', 'The article has been posted');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $admin = Blog::find($id);

        return view('admin/admin_show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $admin = Blog::find($id);
        // $plants = $plant;
        return view('admin/admin_edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'subject' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        //dd($input);
        
        $admin = Blog::find($id);
        $admin->update($input);
        // $plants->fill($input)->save();
        // $plants->update($request->except(['_token', 'submit']));

        return redirect()->route('admin.index')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $admin = Blog::find($id);
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Data has been deleted');
    }
}
