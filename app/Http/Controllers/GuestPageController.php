<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestPageController extends Controller
{
    public function home()
    {
        return view('pages/guest/home');
    }
    
    public function mirrorSpecs()
    {
        return view('pages/guest/mirrorSpecs');
    }
    
    public function setup()
    {
        return view('pages/guest/setup');
    }
    
    public function widgets()
    {
        return view('pages/guest/widgets');
    }

    public function login()
    {
        return view('pages/guest/login');
    }
    
}
