<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Database\Seeders\ArticleSeeder;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view("articles.index", ["articles" => $articles]);
    }

    public function create()
    {
        return view("articles.create");
    }

    public function store(Request $request)
    {
        $article = new Article();

        $article->title = $request->title;
        $article->body =$request->body;

        $article->save();

        return redirect(route("articles.index"));
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view("articles.show", ["article" => $article]);
    }
}
