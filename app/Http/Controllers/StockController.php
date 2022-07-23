<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStockRequest;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        return Stock::all();
    }

    public function store(StoreStockRequest $request)
    {
        $stock = Stock::create($request->validated());

        return $stock;
    }

    public function show(Stock $stock)
    {
        return $stock;
    }
}
