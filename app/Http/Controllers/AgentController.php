<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.agent.agents',[
            "title" => "agents",
            'agents' => Agent::all()
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
        return view('admin.agent.create',[
            "title" => "agents"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nik' => 'required|max:255',
            'name' => 'required',
            'sex' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
            'whatsapp' => 'required|min:10',
            'instagram' => 'required',
            'facebook' => 'required',
            'photo_path' => 'image|file|max:512',
            'status' => 'required'
        ]);

        //ddd($validated);

        if($request->photo_path){
            if($request->old_photo_path){
                Storage::delete($request->old_photo_path);
            }
            $photo_path= $request->file('photo_path')->store('uploaded_images');
        }else {
            $photo_path = $request->old_photo_path;
        }



        //Agent::create($validated);
        Agent::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'sex' => $request->sex,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'address' => $request->address,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'photo_path' => $photo_path,
            'status' => $request->status
        ]);
        return redirect('/dashboard/agents')->with('success','Data Sukses Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
        return view('admin.agent.show',[
            "title" => "agents",
            'agent' => $agent
                           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
        return view('admin.agent.edit',[
            "title" => "agents",
            'agent' => $agent,
            'agents' => Agent::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentRequest  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
        $rules = [
            'nik' => 'required|max:255',
            'name' => 'required',
            'sex' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'address' => 'required|min:10',
            'whatsapp' => 'required|min:10',
            'instagram' => 'required',
            'facebook' => 'required',
            'photo_path' => 'image|file|max:512',
            'status' => 'required'
        ];

        
        //return ddd($rules);

         $validateData = $request->validate($rules);
         //if($request->photo_path){
         if($validateData['photo_path']){
            if($request->old_photo_path){
                Storage::delete($request->old_photo_path);
            }
            $validateData['photo_path'] = $request->file('photo_path')->store('uploaded_images');
        //}
    }

        

        //Agent::where('id', $agent->id)->update($validateData);

        Agent::where('id', $agent->id)
        ->update([
            'nik' => $request->nik,
            'name' => $request->name,
            'sex' => $request->sex,
            'email' => $request->email,
            'birthdate' => $request->birthdate,
            'address' => $request->address,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'photo_path' => $request->photo_path,
            'status' => $request->status
        ]);

        return redirect('/dashboard/agents')->with('success','Data Sukses Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
        Agent::destroy($agent->id);
        return redirect('/dashboard/agents');//.with('success','Article Sukses Ditambahkan');
    
    }
}
