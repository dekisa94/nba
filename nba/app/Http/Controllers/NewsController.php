<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $news=News::with('user')->orderBy('id', 'DESC')->paginate(10);

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
    public function create()
    {
        $teams = Team::get();
        return view('news.create', compact('teams'));
    }
    public function store()
    {
        $this->validate(request(), ['title'=>'required', 'content'=>'required']);
        $news = new News();
        $news->title=request('title');
        $news->content=request('content');
        $news->user_id=auth()->user()->id;

        $news->save();
        $news->teams()->attach(request('teams'));

        session()->flash('message', 'Thank you for publishing article on www.nba.com');

        return redirect('/news');
    }
}
