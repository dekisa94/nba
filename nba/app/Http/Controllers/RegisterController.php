<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\verificationMail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {

        $this->validate(request(), ['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|confirmed', 'password_confirmation' => 'required']);
        $user= new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->is_verified=false;
        $user->save();

        Mail::to($user)->send(new verificationMail($user));
        return redirect('/login');
    }
}
