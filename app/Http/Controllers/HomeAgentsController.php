<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;


class HomeAgentsController extends Controller
{
    public function index()
    {
            return view('home.agents-grid',[
            "title" => "agents",
            'profile' => Profile::firstorfail(),
            "agents" => DB::table('agents')->where('status','=','Aktif')->orderBy('name')->paginate(9)
        ]);
    }
}
