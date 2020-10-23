<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            } else {
                $articles=Article::latest()->get();
            }

        return view('articles.index', ['articles'=> $articles]);
    }

    public function show(Article $article)
    {   //show a single resource
        return view('articles.show', ['article'=>$article]);
    }

    public function create()
    {   //shows a view to create a new resource

        return view ('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {   //persist the new resource
        $this->validateArticle();

        $article = new Article(request(['title','excerpt','body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

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
            'body' => ['required'],
            'tags'=> 'exists:tags,id' //protects against using a tag that does not exist avoiding SQL query error
        ]);
    }
}
