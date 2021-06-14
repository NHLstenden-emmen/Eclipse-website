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
    
    public function update(Request $request)
    {
        $widget = user_settings::find($request->input('id'));

        $success = $widget->update([
        ]);
        
        return [
            'success' => $success
        ];
    }
}
