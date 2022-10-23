<?php

namespace App\Http\Controllers;

use App\Models\CategoryListing;
use Illuminate\Http\Request;

class CategoryListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        return view('admin.categoryListing.categoryListing',[
            "title" => "categoryListing",
            "category_listings" => CategoryListing::all()  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoryListing.create',[
            "title" => "categoryListing"  
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|max:255'        
        ]);

        CategoryListing::create($validated);
        return redirect('/dashboard/categoryListing')->with('success','Kategori Sukses Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryListing  $categoryListing
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryListing $categoryListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryListing  $categoryListing
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryListing $categoryListing)
    {
        return view('admin.categoryListing.edit',[
            "title" => "categoryListing"  ,
            'categoryListing' => $categoryListing,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryListing  $categoryListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryListing $categoryListing)
    {
        $rules = [
            'category_name' => 'required|max:255'
        ];

       

        $validateData = $request->validate($rules);

        //return dd($article);

        CategoryListing::where('id', $categoryListing->id)
        ->update($validateData);
        return redirect('/dashboard/categoryListing')->with('success','Kategori Sukses Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryListing  $categoryListing
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryListing $categoryListing)
    {
        CategoryListing::destroy($categoryListing->id);
        return redirect('/dashboard/categoryListing');//.with('success','Article Sukses Ditambahkan');
    

    }
}
