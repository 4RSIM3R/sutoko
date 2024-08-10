<?php

namespace App\Http\Controllers;

use App\Contract\LocationContract;
use App\Http\Requests\LocationRequest;
use Exception;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    protected LocationContract $service;

    public function __construct(LocationContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $locations = $this->service->all(paginate: true, page: $request->get('page', 1));
        return view('location.index', compact('locations'));
    }

    public function create()
    {
        return view('location.form');
    }

    public function store(LocationRequest $request)
    {
        $payload = $request->validated();
        $result = $this->service->create($payload);


        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('location.index');
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

    public function update(LocationRequest $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
