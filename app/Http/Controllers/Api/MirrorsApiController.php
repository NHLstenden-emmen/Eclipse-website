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
}
