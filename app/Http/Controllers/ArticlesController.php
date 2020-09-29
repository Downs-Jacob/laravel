<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($Id)
    {
        $article = Article::find($Id);
        return view('articles.show', ['article'=>$article]);
    }
}
