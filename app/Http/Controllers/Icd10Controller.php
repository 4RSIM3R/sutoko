<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Satusehat\Integration\Terminology\Icd10;

class Icd10Controller extends Controller
{

    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = Icd10::query()
            ->where('icd10_code', 'like', '%' . $search . '%')
            ->where('icd10_en', 'like', '%' . $search . '%')
            ->where('icd10_id', 'like', '%' . $search . '%')
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
