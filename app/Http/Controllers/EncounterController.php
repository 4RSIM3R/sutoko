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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('encounter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EncounterRequest $request)
    {
        //
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
