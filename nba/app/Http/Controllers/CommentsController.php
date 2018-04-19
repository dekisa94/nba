<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Comment;
use Illuminate\Support\Facades\Mail;
use App\Mail\commentRecived;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('comment');
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

        $team=Team::find($team_id);
        
        Mail::to($team)->send(new commentRecived($team));
        return redirect()->back();
    }
}
