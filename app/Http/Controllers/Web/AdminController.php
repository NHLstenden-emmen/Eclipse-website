<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends WebController
{
    public function dashboard()
    {
        return view('pages/admin/dashboard');
    }
}
