<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\CategoryListing;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;
use Illuminate\Support\Facades\DB;


class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $listing = DB::table('listings')
        ->join('category_listings', 'listings.categoryListing_id', '=', 'category_listings.id')
        ->join('agents', 'listings.agent_id', '=', 'agents.id')
        ->select('listings.*', 'category_listings.category_name','agents.name')
        ->get();

           return view('admin.listing.listing',[
            "title" => "listing",
            "listings" => $listing,
            "agents" => Agent::all(),
            "categories" => CategoryListing::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.listing.create',[
            "title" => "listing",
            "agents" => Agent::all(),
            "category_listings" => CategoryListing::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreListingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required',
            'address' => 'required',
            'categoryListing_id' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'type' => 'required',
            'building_width' => 'required',
            'area_width' => 'required',
            'garage' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo_path' => 'image|file|max:512',
            'agent_id' => 'required',
            'owner_name' => 'required',
            'owner_phone' => 'required',
            'status' => 'required',
        ]);

        if($validateData['photo_path']){
            $validateData['photo_path'] = $request->file('photo_path')->store('uploaded_images');
        }

        //if( is_numeric( $data['price'] ) ) {
            $validateData['price']= str_replace( ',', '', $validateData['price']);
        //}
        
        ///ddd($validateData['price']);

        Listing::create($validateData);
        return redirect('/dashboard/listing')->with('success','Data Sukses Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        return view('admin.listing.show',[
            "title" => "listing",
            'listing' => $listing,            
            "agents" => Agent::all(),
            "category_listings" => CategoryListing::all()

                           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
        return view('admin.listing.edit',[
            "title" => "listing",
            "agents" => Agent::all(),
            "category_listings" => CategoryListing::all(),
            'listing' => $listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListingRequest  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListingRequest $request, Listing $listing)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'slug' => 'required',
            'address' => 'required',
            'categoryListing_id' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'type' => 'required',
            'building_width' => 'required',
            'area_width' => 'required',
            'garage' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo_path' => 'image|file|max:1024',
            'agent_id' => 'required',
            'owner_name' => 'required',
            'owner_phone' => 'required',
            'status' => 'required',
            'buyer_agent_id' => 'max:255'
        ];

        if($request->slug_edit != $listing->slug){
            $rules['slug'] = 'required|unique:articles';
        }

        if($request->status != "Terjual"){
            $request['buyer_agent_id'] = '';
        }

        $validateData = $request->validate($rules);

        //return ddd($listing);

        Listing::where('id', $listing->id)
        ->update($validateData);
        return redirect('/dashboard/listing')->with('success','Data Sukses Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        Listing::destroy($listing->id);
        return redirect('/dashboard/listing');//.with('success','Data Sukses Dihapus');
   
    }
}
