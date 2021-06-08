<?php

namespace App\Http\Controllers\Api;

use App\Models\user_settings;
use Illuminate\Http\Request;

class UserSettingsApiController extends ApiController
{
    public function index()
    {
        return user_settings::all();
    }
    
    public function update(user_settings $user_setting)
    {
        request()->validate([
            'type' => 'required',
            'params' => 'required',
        ]);

        $success = $user_setting->update([
            'type' => request('type'),
            'params' => request('params'),
        ]);
        
        return [
            'success' => $success
        ];
    }
}
