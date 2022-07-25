<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOperationRequest;
use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Operation::all();
    }

    public function store(StoreOperationRequest $request)
    {
        $operation = Operation::create($request->validated());

        return $operation;
    }

    public function show(Operation $operation)
    {
        return $operation;
    }
}
