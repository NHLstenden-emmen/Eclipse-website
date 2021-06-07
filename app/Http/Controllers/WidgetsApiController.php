<?php

namespace App\Http\Controllers;

use App\Models\Widgets;
use Illuminate\Http\Request;

class WidgetsApiController extends Controller
{
    public function index()
    {
        return Widgets::all();
    }

    public function store()
    {
        request()->validate([
            'type' => 'required',
            'params' => 'required',
        ]);

        return Widgets::create([
            'type' => request('type'),
            'params' => request('params'),
        ]);
    }
    
    public function update(Widgets $widget)
    {
        request()->validate([
            'type' => 'required',
            'params' => 'required',
        ]);

        $success = $widget->update([
            'type' => request('type'),
            'params' => request('params'),
        ]);
        
        return [
            'success' => $success
        ];
    }

    public function destroy(Widgets $widget)
    {
        $success = $widget->delete();

        return [
            'success' => $success
        ];
    }
}
