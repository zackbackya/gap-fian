<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $article = DB::table('articles')
            ->join('category_articles', 'articles.category_id', '=', 'category_articles.id')
            ->select('articles.*', 'category_articles.category_name')
            ->get();

          //dd($article);

        return view('admin.article.article',[
            "title" => "article",
            "categories" => CategoryArticle::all(),
            //'articles' => Article::all()
            'articles' => $article            
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
        return view('admin.article.create',[
            "title" => "article",
            "categories" => CategoryArticle::all()                 
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
        //

        //return $request;
        /*
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required',
            'photo_path' => 'image|file|max:512',
            'source' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'status' => 'required'
        ]);

        if($validated['photo_path']){
            $validated['photo_path'] = $request->file('photo_path')->store('uploaded_images');
        }
        */

        if($request->photo_path){
            $photo_path= $request->file('photo_path')->store('uploaded_images');
        }else{
            $photo_path="";
        }


        //Article::create($validated);

        Article::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'photo_path' => $photo_path,
            'source' => $request->source,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'status' => $request->status
        ]);

        return redirect('/dashboard/article')->with('success','Article Sukses Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        return view('admin.article.show',[
            "title" => "article",
            'article' => $article
                           
        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.edit',[
            "title" => "article",
            "categories" => CategoryArticle::all(),
            'article' => $article       
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        /*
        $rules = [
            'title' => 'required|max:255',
            'source' => 'required',
            'category_id' => 'required',
            'photo_path' => 'image|file|max:512',
            'content' => 'required',
            'status' => 'required'
        ];

        if($request->slug_edit != $article->slug){
            $rules['slug'] = 'required|unique:articles';
        }

        $validateData = $request->validate($rules);

        if($request->photo_path){
        if($validateData['photo_path']){
            if($request->old_photo_path){
                Storage::delete($request->old_photo_path);
            }
            $validateData['photo_path'] = $request->file('photo_path')->store('uploaded_images');
        }
    }
    */

        //return dd($article);

        //Article::where('id', $article->id)->update($validateData);
        
        if($request->photo_path){
            if($request->old_photo_path){
                Storage::delete($request->old_photo_path);
            }
            $photo_path= $request->file('photo_path')->store('uploaded_images');
        }else {
            $photo_path = $request->old_photo_path;
        }

        Article::where('id', $article->id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'photo_path' => $photo_path,
            'source' => $request->source,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'status' => $request->status
        ]);
        return redirect('/dashboard/article')->with('success','Article Sukses Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        Article::destroy($article->id);
        return redirect('/dashboard/article');//.with('success','Article Sukses Ditambahkan');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Article::class, 'slug', $request->article_judul);

        return response()->json(['slug' => $slug]);
    }
}
