<?php

namespace App\Http\Controllers;

use App\Http\Requests\EncounterRequest;
use Illuminate\Http\Request;

class EncounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('encounter.index');
    }

    public function create()
    {
        return view('encounter.form');
    }


    public function store(EncounterRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EncounterRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
