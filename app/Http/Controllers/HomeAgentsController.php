<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;


class HomeAgentsController extends Controller
{
    public function index()
    {
            return view('home.agents-grid',[
            "title" => "agents",
            "agents" => Agent::all()
        ]);
    }
}
