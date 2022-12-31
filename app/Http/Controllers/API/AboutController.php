<?php

namespace App\Http\Controllers\API;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function fetch()
    {
        $about = About::all();

        return response()->json($about);
    }
}
