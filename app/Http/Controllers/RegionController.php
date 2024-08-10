<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function province(Request $request)
    {
        $search = $request->get('search');
    }

    public function city(Request $request)
    {
        $search = $request->get('search');
    }

    public function district(Request $request)
    {
        $search = $request->get('search');
    }

    public function village(Request $request)
    {
        $search = $request->get('search');
    }
}
