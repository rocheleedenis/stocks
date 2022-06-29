<?php

namespace App\Http\Controllers;

use App\Models\InvestmentFund;
use App\Http\Requests\StoreInvestmentFundRequest;

class InvestmentFundController extends Controller
{
    public function index()
    {
        return InvestmentFund::get();
    }

    public function store(StoreInvestmentFundRequest $request)
    {
        $investmentFund = InvestmentFund::create($request->validated());

        return $investmentFund;
    }

    public function show(InvestmentFund $investmentFund)
    {
        return $investmentFund;
    }
}
