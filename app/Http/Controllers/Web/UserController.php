<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends WebController
{
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('pages.user.dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
