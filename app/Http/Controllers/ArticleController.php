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
        return view("Articles.index", ["articles" => $articles]);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view("Articles.show", ["article" => $article]);
    }
}
