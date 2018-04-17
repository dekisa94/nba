<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('teams', compact('teams'));
    }
    public function show($id)
    {
        $team = Team::with('players')->find($id);
        return view('show', compact('team'));
    }
}
