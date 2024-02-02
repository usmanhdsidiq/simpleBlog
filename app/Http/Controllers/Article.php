<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Article extends Controller
{
    public function index()
    {
        $article = Blog::orderBy('created_at', 'DESC')->get();

        return view('article_home', ['article' => $article]);
    }

    public function show($id): View
    {
        $article = Blog::find($id);

        return view('article_view', compact('article'));
    }
}
