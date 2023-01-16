<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprofileRequest;
use App\Http\Requests\UpdateprofileRequest;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.profile.profile',[
            "title" => "profile",
            "profiles" => Profile::all(),
            "profile" => Profile::firstorFail(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create',[
            "title" => "profile"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprofileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprofileRequest $request)
    {
        if($request->logo_path){
            if($request->old_logo_path){
                Storage::delete($request->old_logo_path);
            }
            $logo_path= $request->file('logo_path')->store('uploaded_images');
        }else {
            $logo_path = $request->old_logo_path;
        }

        /*

        if($request->photo_path){
            if($request->old_photo_path){
                Storage::delete($request->old_photo_path);
            }
            $photo_path= $request->file('photo_path')->store('uploaded_images');
        }else {
            $photo_path = $request->old_photo_path;
        }
        */

        Profile::create([
            'company_name' => $request->company_name,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'address' => $request->address,
            'email' => $request->email,                
            'phone' => $request->phone,
            'whatsapp' => $request->whatsapp,
            'website' => $request->website,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'logo_path' => $logo_path
          //  'photo_path' => $photo_path
        ]);
        return redirect('/dashboard/profile')->with('success','Data Sukses Ditambahkan');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
        return view('admin.profile.edit',[
            "title" => "profile",
            'profile' => $profile
                           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofileRequest  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprofileRequest $request, profile $profile)
    {
        /*
        if($request->photo_path){
            if($request->old_photo_path){
                Storage::delete($request->old_photo_path);
            }
            $photo_path= $request->file('photo_path')->store('uploaded_images');
        }else {
            $photo_path = $request->old_photo_path;
        }
        */
        
        if($request->logo_path){
            if($request->old_logo_path){
                Storage::delete($request->old_logo_path);
            }
            $logo_path= $request->file('logo_path')->store('uploaded_images');
        }else {
            $logo_path = $request->old_logo_path;
        }
    
            //Agent::where('id', $agent->id)->update($validateData);
    
            Profile::where('id', $profile->id)
            ->update([
                'company_name' => $request->company_name,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,           
                'whatsapp' => $request->whatsapp,
                'website' => $request->website,
                'instagram' => $request->instagram,
                'facebook' => $request->facebook,
                'logo_path' => $logo_path
                //'photo_path' => $photo_path
            ]);

    
            return redirect('/dashboard/profile');//->with('success','Data Sukses Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
