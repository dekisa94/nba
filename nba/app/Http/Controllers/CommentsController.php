<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store($team_id)
    {
        $this->validate(request(), ['content' => 'required|min:15']);
        $user_id = auth()->user()->id;
        $comment = new Comment();
        $comment->content = request('content');
        $comment->team_id = $team_id;
        $comment->user_id = $user_id;
        $comment->save();
        
        return redirect()->back();
    }
}
