<?php

namespace App\Http\Controllers\Api;

use App\Models\Mirrors;
use Illuminate\Http\Request;

class MirrorsApiController extends ApiController
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
