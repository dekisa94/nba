<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::with('user')->paginate(10);

        return view('news.newsIndex', compact('news'));
    }
    public function show($id)
    {
        $oneNew= News::with(['user', 'teams'])->find($id);

        return view('news.show', compact('oneNew'));
    }
    public function showTeam(Team $team)
    {
        $news= $team->news; 
        return view('news.teamNews', compact('news'));
    }
}
