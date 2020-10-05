<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {   //render a single resource
        $articles = Article::latest()->get();
        return view('articles.index', ['articles'=> $articles]);
    }

    public function show(Article $article)
    {   //show a single resource
        return view('articles.show', ['article'=>$article]);
    }

    public function create()
    {   //shows a view to create a new resource
        return view ('articles.create');
    }

    public function store()
    {   //persist the new resource
        Article::create($this -> validateArticle());
        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {   //show a view to edit an existing resource
       return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {   //persist the edited resource
        $article -> update($this->validateArticle());
        return redirect('/articles');
    }

    public function destroy()
    {   //remove-delete the resource entirely

    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required']
        ]);
    }
}
