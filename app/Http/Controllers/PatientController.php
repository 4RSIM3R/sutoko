<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index(Request $request)
    {
        return view('patient.index');
    }


    public function create()
    {
        return view('patient.create');
    }


    public function store(PatientRequest $request) {}


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(PatientRequest $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
