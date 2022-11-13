<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use Illuminate\Support\Facades\DB;


class HomeAgentsController extends Controller
{
    public function index()
    {
            return view('home.agents-grid',[
            "title" => "agents",
            "agents" => DB::table('agents')->orderBy('name')->paginate(9)
        ]);
    }
}
