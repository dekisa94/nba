<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function show($id)
    {
        return view('player.show');
    }
}
