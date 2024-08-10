<?php

namespace App\Http\Controllers;

use App\Contract\PractionerContract;
use App\Http\Requests\PractionerRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Satusehat\Integration\OAuth2Client;

class PractionerController extends Controller
{

    protected PractionerContract $service;

    public function __construct(PractionerContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $practioners = $this->service->all(paginate: true, page: $page);
        return view('practioner.index', compact('practioners'));
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
        return view('practioner.form');
    }

    public function store(PractionerRequest $request)
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
        return view('practioner.show');
    }

    public function edit(string $id)
    {
        return view('practioner.form');
    }

    public function update(PractionerRequest $request, string $id)
    {
        $payload = $request->validated();
    }

    public function destroy(string $id)
    {
        //
    }
}
