<?php

namespace App\Http\Controllers;

use App\Models\FundManager;
use App\Http\Requests\StoreFundManagerRequest;

class FundManagerController extends Controller
{
    public function index()
    {
        return FundManager::get();
    }

    public function store(StoreFundManagerRequest $request)
    {
        $fundManager = FundManager::create($request->validated());

        return $fundManager;
    }

    public function show(FundManager $fundManager)
    {
        return $fundManager;
    }
}
