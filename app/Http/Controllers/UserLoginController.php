<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserLoginRequest;
use App\Http\Requests\UpdateUserLoginRequest;
use Illuminate\Support\Facades\DB;

class UserLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user = DB::table('user_logins')
        ->join('agents', 'user_logins.agent_id', '=', 'agents.id')
        ->select('user_logins.*', 'agents.name')
        ->get();

        return view('admin.user.user',[
            "title" => "user",
            'users' => $user   
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
        return view('admin.user.create',[
            "title" => "user",
            'agents' => Agent::all()
                       
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $validateData = $request->validate([
            'agent_id' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:user_logins',
            'access' => 'required',
            'password' => 'required|max:255|min:2'

        ]);
        
        $validateData['password'] = bcrypt($validateData['password']); 

        UserLogin::create($validateData);
        return redirect('/dashboard/user')->with('success','User Sukses Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function show(UserLogin $userLogin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLogin $userLogin)
    {
        //
        return view('admin.user.edit',[
            "title" => "user",
            'userLogin' => $userLogin,
            'agents' => Agent::all()
            
        ]);
    }
    
 

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserLoginRequest  $request
     * @param  \App\Models\UserLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserLogin $userLogin)
    {
        //
        $validateData = $request->validate([
            'agent_id' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:user_logins',
            'access' => 'required',
            'password' => 'required|max:255|min:2'

        ]);
        
        $validateData['password'] = bcrypt($validateData['password']); 

        UserLogin::where('username', $userLogin->username)
        ->update($validateData);
        return redirect('/dashboard/user')->with('success','User Sukses Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserLogin  $userLogin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserLogin $userLogin)
    {
        //
        UserLogin::destroy($userLogin->id);
        return redirect('/dashboard/user');//.with('success','Article Sukses Ditambahkan');
    }
}
