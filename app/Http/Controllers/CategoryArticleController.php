<?php

namespace App\Http\Controllers;

use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class CategoryArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categoryArticle.categoryArticle',[
            "title" => "categoryArticle",
            "category_articles" => categoryArticle::all()  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoryArticle.create',[
            "title" => "categoryArticle"  
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

        categoryArticle::create($validated);
        return redirect('/dashboard/categoryArticle')->with('success','Kategori Sukses Ditambahkan');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryArticle $categoryArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryArticle $categoryArticle)
    {
        return view('admin.categoryArticle.edit',[
            "title" => "categoryArticle"  ,
            'categoryArticle' => $categoryArticle,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryArticle $categoryArticle)
    {
        $rules = [
            'category_name' => 'required|max:255'
        ];

       

        $validateData = $request->validate($rules);

        //return dd($article);

        categoryArticle::where('id', $categoryArticle->id)
        ->update($validateData);
        return redirect('/dashboard/categoryArticle')->with('success','Kategori Sukses Dirubah');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryArticle  $categoryArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryArticle $categoryArticle)
    {
        CategoryArticle::destroy($categoryArticle->id);
        return redirect('/dashboard/categoryArticle');//.with('success','Article Sukses Ditambahkan');
    
    }
}
