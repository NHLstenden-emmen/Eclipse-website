<?php

namespace App\Http\Controllers;

use App\Models\Widget;
use Illuminate\Http\Request;

class WidgetApiController extends Controller
{
    public function index()
    {
        return Widget::all();
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        return Widget::create([
            'title' => request('title'),
            'content' => request('content'),
        ]);
    }
    
    public function update(Widget $widget)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $success = $widget->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);
        
        return [
            'success' => $success
        ];
    }

    public function destroy(Widget $widget)
    {
        $success = $widget->delete();

        return [
            'success' => $success
        ];
    }
}
