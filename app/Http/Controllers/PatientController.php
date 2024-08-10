<?php

namespace App\Http\Controllers;

use App\Contract\PatientContract;
use App\Http\Requests\PatientRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PatientController extends Controller
{

    protected PatientContract $service;

    public function __construct(PatientContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $page = $request->query('page', 1);
        $patients = $this->service->all(paginate: true, page: $page);
        return view('patient.index', compact('patients'));
    }

    public function search(Request $request)
    {
        $search = $request->query('search');
        $where = [["name", "like", "%{$search}%"]];
        $patients = $this->service->all(whereConditions: $where);
        return Response::json($patients);
    }

    public function create()
    {
        return view('patient.form');
    }

    public function store(PatientRequest $request)
    {
        $payload = $request->validated();
        $result = $this->service->create($payload);

        if ($result instanceof Exception) {
            return redirect()->back()->withErrors($result->getMessage());
        } else {
            return redirect()->route('practioner.index');
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


    public function update(PatientRequest $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
