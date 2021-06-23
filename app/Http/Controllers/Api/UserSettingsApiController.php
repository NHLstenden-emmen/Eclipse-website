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
    
    public function getUserSettings(Request $request) {
        $response = user_settings::select('widget_settings')->where('id', $request->id)->first();
        return response([
            'success' => $response['widget_settings']
        ]);
	}

    public function update(Request $request)
    {
        $user_settings = user_settings::find($request->input('id'));
        
        $success = $user_settings->update($request->input('widget_settings'));
	
        return ([
            'success' => $success
        ]);
    }
}
