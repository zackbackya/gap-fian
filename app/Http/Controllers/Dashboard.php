<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Agent;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    //
    public function index()
    {
        //
        $sales = Listing::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->where('status','=','Terjual')
        ->orderBy('created_at', 'desc')
        ->sum('price');
        
        /*
        $listings = Listing::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->orderBy('created_at', 'desc')
        ->limit(10)
        ->get();
        */

        $listings = DB::table('listings')
        ->join('agents', 'listings.agent_id', '=', 'agents.id')
        ->select('listings.*',  'agents.name')
        ->whereMonth('listings.created_at', date('m'))
        ->whereYear('listings.created_at', date('Y'))
        ->orderBy('listings.created_at','desc')
        ->limit(8)
        ->get();
        
        $jumlah_listing_baru = Listing::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->orderBy('created_at', 'desc')
        ->count();

        $jumlah_article_baru = Article::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->orderBy('created_at', 'desc')
        ->count();

        

        $jumlah_agent_baru = Agent::whereMonth('created_at', date('m'))
        ->whereYear('created_at', date('Y'))
        ->orderBy('created_at', 'desc')
        ->count();

        $jumlah_agent_tertinggi = DB::table('listings')
        ->join('agents', 'listings.agent_id', '=', 'agents.id')
        ->select(DB::raw('SUM(listings.price) As Sales'),  'agents.name','agents.photo_path')
        ->where('listings.status','=','Terjual')
        ->whereMonth('listings.created_at', date('m'))
        ->whereYear('listings.created_at', date('Y'))
        ->groupBy('agents.name','agents.photo_path')
        ->orderBy('Sales','desc')
        ->limit(8)
        ->get();

        $jumlah_agent_terendah = DB::table('listings')
        ->join('agents', 'listings.agent_id', '=', 'agents.id')
        ->select(DB::raw('SUM(listings.price) As Sales'),  'agents.name','agents.photo_path')
        ->where('listings.status','=','Terjual')
        ->whereMonth('listings.created_at', date('m'))
        ->whereYear('listings.created_at', date('Y'))
        ->groupBy('agents.name','agents.photo_path')
        ->orderBy('Sales','asc')
        ->limit(8)
        ->get();

        $jumlah_agent_belum_clossing = DB::table('listings')
        ->join('agents', 'listings.agent_id', '=', 'agents.id')
        ->select(DB::raw('SUM(listings.price) As potensi'), 'agents.name','agents.photo_path')
        ->where('listings.status','=','Belum Terjual')
        ->whereMonth('listings.created_at', date('m'))
        ->whereYear('listings.created_at', date('Y'))
        ->groupBy('agents.name','agents.photo_path')
        ->orderBy('listings.created_at','desc')
        ->limit(8)
        ->get();

        

        return view('admin.dashboard',[
            "title" => "dashboard",
            'listings' => $listings,
            'sales' => $sales,
            'listing_baru' => $jumlah_listing_baru,
            'article_baru' => $jumlah_article_baru,
            'agent_baru' => $jumlah_agent_baru,
            'agent_tertinggi' => $jumlah_agent_tertinggi,
            'agent_terendah' => $jumlah_agent_terendah,
            'agent_clossing' => $jumlah_agent_belum_clossing
        ]);
    }

}
