<?php

namespace App\Http\Controllers\Api;

use App\Models\Widgets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\WidgetRequest;

class WidgetsApiController extends ApiController
{
    public function index()
    {
        return Widgets::all();
    }

    public function getSpesificWidget(Request $request)
    {
        $response = Widgets::select('type','params')->where('type', $request->search)->first();
        return response([
            'success' => $response
        ]);
    }

    public function store(Request $request)
    {
        return Widgets::create([
            'type' => $request->input('type'),
            'params' => $request->input('params'),
            'recentdata' => $request->input('recentdata'),
        ]);
    }
    
    public function update(Request $request)
    {
        $widget = Widgets::find($request->input('id'));

        $success = $widget->update([
            'type' => $request->input('type'),
            'params' => $request->input('params'),
            'recentdata' => $request->input('recentdata'),
        ]);
        
        return [
            'success' => $success
        ];
    }

}
