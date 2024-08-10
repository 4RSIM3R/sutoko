<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Satusehat\Integration\Terminology\Icd9cm;

class Icd9Controller extends Controller
{

    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = Icd9cm::query()
            ->where('icd9cm_code', 'like', '%' . $search . '%')
            ->orWhere('icd9cm_en', 'like', '%' . $search . '%')
            ->orWhere('icd9cm_id', 'like', '%' . $search . '%')
            ->limit(10)
            ->get();
            
        return Response::json($data);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
