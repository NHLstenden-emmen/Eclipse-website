<?php

namespace App\Http\Controllers\Api;

use App\Models\Widgets;
use Illuminate\Http\Request;

class WidgetsApiController extends ApiController
{
    public function index()
    {
        return Widgets::all();
    }

    public function store(Request $request)
    {
        return Widgets::create([
            'type' => $request->input('type'),
            'params' => $request->input('params'),
        ]);
    }
    
    public function update(Request $request)
    {
        $widget = Widgets::find($request->input('id'));

        $success = $widget->update([
            'type' => $request->input('type'),
            'params' => $request->input('params'),
        ]);
        
        return [
            'success' => $success
        ];
    }

    public function destroy(Widgets $widget)
    {
        $success = $widget->delete();

        return response([
            'success' => $success
        ]);
    }

    
    public function weather()
    {
        // api call doen en het dan terug sturen als request
    }
}
