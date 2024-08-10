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
        $page = $request->get('page', 1);
        $encounters = $this->service->all(page: $page, paginate: true, relations: ['patient', 'practioner', 'location']);
        return view('encounter.index', compact('encounters'));
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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(EncounterRequest $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
