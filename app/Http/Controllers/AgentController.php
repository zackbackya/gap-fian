<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Http\Requests\UpdateAgentRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;
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
            //'birthdate' => 'required',
            'address' => 'required',
            'whatsapp' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'photo_path' => 'image|file|max:512',
            'status' => 'required'
        ]);

        //ddd($validated);

        if($validated['photo_path']){
            $validated['photo_path'] = $request->file('photo_path')->store('uploaded_images');
        }


        Agent::create($validated);
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
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        //
        $rules = [
            'nik' => 'required|max:255',
            'name' => 'required',
            'sex' => 'required',
            'email' => 'required',
            //'birthdate' => 'required',
            'address' => 'required',
            'whatsapp' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'photo_path' => 'image|file|max:512',
            'status' => 'required'
        ];

        

        $validateData = $request->validate($rules);

        //return dd($article);

        Agent::where('id', $agent->id)
        ->update($validateData);
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
