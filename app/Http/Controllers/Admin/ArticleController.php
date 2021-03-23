<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('author')->latest()->paginate(10);
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $r)
    {
        if($r->hasFile('picture')) {
            $file = $r->file('picture');
            $extension = $file->extension();
            $imgName = time() . '.' . $extension;
            $file->storeAs('article/picture', $imgName, 'public');
        } else {
            $imgName = '';
        }

        $article = Article::create([
            'user_id' => auth()->user()->id,
            'title' => $r->title,
            'slug' => Str::slug($r->title),
            'picture' => $imgName,
            'content' => $r->content,
        ]);

        session()->flash('success', 'The new article was created successfully!');
        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $r, $id)
    {
        $oldArticle = Article::findOrFail($id);

        if($r->hasFile('picture')) {
            Storage::delete('public/article/picture/' . $oldArticle->picture);
            $file = $r->file('picture');
            $extension = $file->extension();
            $imgName = time() . '.' . $extension;
            $file->storeAs('article/picture', $imgName, 'public');
        } else {
            $imgName = $oldArticle->picture;
        }

        $oldArticle->update([
            'user_id' => auth()->user()->id,
            'title' => $r->title,
            'slug' => Str::slug($r->title),
            'picture' => $imgName,
            'content' => $r->content,
        ]);

        session()->flash('success', 'The article was edited successfully!');
        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        Storage::delete('public/article/picture/' . $article->picture);
        $article->delete();

        session()->flash('success', 'The article was deleted successfully!');
        return redirect()->route('admin.article.index');
    }
}
