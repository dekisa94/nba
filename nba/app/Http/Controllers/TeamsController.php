<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teams = Team::get();
        return view('teams', compact('teams'));
    }
    public function show($id)
    {
        $team = Team::with(['players', 'comments'])->find($id);
        return view('show', compact('team'));
    }
}
