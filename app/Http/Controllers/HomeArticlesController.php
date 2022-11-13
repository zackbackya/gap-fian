<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class HomeArticlesController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')
        ->join('category_articles', 'articles.category_id', '=', 'category_articles.id')
        ->where('articles.status','=','Aktif')
        ->select('articles.*', 'category_articles.category_name')
        ->whereMonth('articles.created_at', date('m'))
        ->whereYear('articles.created_at', date('Y'))
        ->orderBy('articles.created_at','desc')
        ->paginate(9);

            return view('home.articles-grid',[
            "title" => "articles",
            "articles" => $articles
        ]);
    }
}
    