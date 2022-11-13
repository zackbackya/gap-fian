<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class HomeListingsController extends Controller
{
    public function index()
    {
            return view('home.listing-grid',[
            "title" => "listing",
            "listings" => Listing::all()
        ]);
    }
}
