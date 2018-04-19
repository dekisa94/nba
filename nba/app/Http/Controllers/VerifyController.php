<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerifyController extends Controller
{
    public function store($user_id)
    {
        $user = User::find($user_id);
        if($user->is_verified==false)
        {
            $user->is_verified=true;
            $user->save();
            return redirect('/login');
        }
        return redirect('/login');
    }
}
