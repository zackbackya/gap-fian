<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeArticlesController extends Controller
{
    public function index()
    {
            return view('home.articles-grid',[
            "title" => "articles",
            "articles" => Article::all()
        ]);
    }
}
    