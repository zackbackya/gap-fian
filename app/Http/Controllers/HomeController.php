<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use App\Models\Listing;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        
        //

        $listings = DB::table('listings')
        ->join('category_listings', 'listings.categoryListing_id', '=', 'category_listings.id')
        ->where('listings.status','=','Belum Terjual')
        ->select('listings.*', 'category_listings.category_name')
        ->whereMonth('listings.created_at', date('m'))
        ->whereYear('listings.created_at', date('Y'))
        ->orderBy('listings.created_at','desc')
        ->limit(5)
        ->get();

        $agents_sudah_jual = DB::table('listings')
        ->join('agents', 'listings.agent_id', '=', 'agents.id')
        ->select('agents.*', DB::raw('SUM(listings.price) As Sales'))
        ->where('listings.status','=','Terjual')
        ->whereMonth('listings.created_at', date('m'))
        ->whereYear('listings.created_at', date('Y'))
        ->groupBy('agents.id','agents.nik','agents.name','agents.sex','agents.email','agents.birthdate',
                    'agents.address','agents.whatsapp','agents.instagram','agents.facebook','agents.photo_path',
                    'agents.status','agents.created_at','agents.updated_at')
        ->orderBy('Sales','desc')
        ->limit(3)
        ->get();

        $articles = DB::table('articles')
        ->join('category_articles', 'articles.category_id', '=', 'category_articles.id')
        ->where('articles.status','=','Aktif')
        ->select('articles.*', 'category_articles.category_name')
        ->whereMonth('articles.created_at', date('m'))
        ->whereYear('articles.created_at', date('Y'))
        ->orderBy('articles.created_at','desc')
        ->limit(5)
        ->get();

        return view('home.home',[
            "title" => "home",
            'articles' => $articles,
            'listings' => $listings,
            'agents' => Agent::all()
        ]);
    }

}
