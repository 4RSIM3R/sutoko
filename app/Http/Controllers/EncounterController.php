<?php

namespace App\Http\Controllers;

use App\Contract\EncounterContract;
use App\Http\Requests\EncounterRequest;
use Exception;
use Illuminate\Http\Request;

class EncounterController extends Controller
{

    protected EncounterContract $service;

    public function __construct(EncounterContract $service)
    {
        $this->service = $service;
    }

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
        $payload = $request->validated();
        $result = $this->service->create($payload);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('encounter.index');
        }
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
