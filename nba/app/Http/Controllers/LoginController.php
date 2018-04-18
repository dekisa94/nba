<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
    public function create()
    {
        return view('login.create');
    }
    public function store()
    {
        if(!auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors(['message' => 'Pogresni username ili password']);
        }
        return redirect('/teams');
    }
}
