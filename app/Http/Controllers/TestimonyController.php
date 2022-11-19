<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use App\Http\Requests\StoreTestimonyRequest;
use App\Http\Requests\UpdateTestimonyRequest;
use Illuminate\Support\Facades\Storage;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.testimony.testimony',[
            "title" => "testimony",
            "testimonies" => Testimony::all()     
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
        return view('admin.testimony.create',[
            "title" => "testimony",
            "testimony" => Testimony::all()                 
        ]);
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimonyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonyRequest $request)
    {
        //
        if($request->photo_path){
            $photo_path= $request->file('photo_path')->store('uploaded_images');
        }else{
            $photo_path="";
        }

        Testimony::create([
            'name' => $request->name,
            'testimony' => $request->testimony,
            'photo_path' => $photo_path,
            'status' => $request->status
        ]);

        return redirect('/dashboard/testimony')->with('success','Data Sukses Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function show(Testimony $testimony)
    {
        return view('admin.testimony.show',[
            "title" => "testimony",
            'testimony' => $testimony
                           
        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        //
        return view('admin.testimony.edit',[
            "title" => "testimony",
            'testimony' => $testimony
                           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimonyRequest  $request
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonyRequest $request, Testimony $testimony)
    {
        if($request->photo_path){
            if($request->old_photo_path){
                Storage::delete($request->old_photo_path);
            }
            $photo_path= $request->file('photo_path')->store('uploaded_images');
        }else {
            $photo_path = $request->old_photo_path;
        }

        Testimony::where('id', $testimony->id)->update([
            'name' => $request->name,
            'testimony' => $request->testimony,
            'photo_path' => $photo_path,
            'status' => $request->status
        ]);
        return redirect('/dashboard/testimony')->with('success','Data Sukses Dirubah');
 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimony  $testimony
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimony $testimony)
    {
        Testimony::destroy($testimony->id);
        return redirect('/dashboard/testimony');//.with('success','Article Sukses Ditambahkan');

    }
}
