<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends WebController
{
    public function dashboard()
    {
        \QrCode::size(500)
                ->format('png')
                ->generate('codingdriver.com', public_path('img/qrcode.png'));
        
        return view('pages/admin/dashboard');
    }
}
