<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class HomeListingsController extends Controller
{
    public function index()
    {
        
    $listings = DB::table('listings')
    ->join('category_listings', 'listings.categoryListing_id', '=', 'category_listings.id')
    ->select('listings.*', 'category_listings.category_name')
    ->whereMonth('listings.created_at', date('m'))
    ->whereYear('listings.created_at', date('Y'))
    ->orderBy('listings.created_at','desc')
    ->limit(5)
    ->paginate(9);

            return view('home.listing-grid',[
            "title" => "listing",
            "listings" => $listings,
            'profile' => Profile::firstorfail()
        ]);
    }

    public function show($slug)
    {
        
        return view('home.listing-single',[
            "title" => "listing",
            'profile' => Profile::firstorfail(),
            "listing" => Listing::where('slug', $slug)
            ->join('category_listings', 'listings.categoryListing_id', '=', 'category_listings.id')
            ->Join('agents', 'listings.agent_id', '=', 'agents.id')
            ->select('listings.*', 'category_listings.category_name as category_name', 'agents.*','agents.photo_path as photo_agent')->first()
           

        ]);
       
    }
}
