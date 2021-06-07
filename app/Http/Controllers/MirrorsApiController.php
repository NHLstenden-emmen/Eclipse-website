<?php

namespace App\Http\Controllers;

use App\Models\Mirrors;
use Illuminate\Http\Request;

class MirrorsApiController extends Controller
{
    public function index()
    {
        return Mirrors::all();
    }
    
    public function update(Mirrors $mirror)
    {
        request()->validate([
            'type' => 'required',
            'params' => 'required',
        ]);

        $success = $mirror->update([
            'type' => request('type'),
            'params' => request('params'),
        ]);
        
        return [
            'success' => $success
        ];
    }
}
