<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::latest()->limit(6)->get();
        return view('home', compact('article'));
    }

    public function showArticle($id)
    {
        $article = Article::findOrFail($id);
        $articles = Article::latest()->limit(6)->get();

        return view('show-article', compact('article', 'articles'));
    }
}
