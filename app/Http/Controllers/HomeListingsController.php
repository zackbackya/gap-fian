<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
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
    ->paginate(3);

            return view('home.listing-grid',[
            "title" => "listing",
            "listings" => $listings
        ]);
    }
}
