<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class GuestPageController extends WebController
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
}
