<?php

namespace App\Http\Controllers;

use App\Models\Stockbroker;

class StockbrokerController extends Controller
{
    public function index()
    {
        return Stockbroker::get();
    }

    public function show(Stockbroker $stockbroker)
    {
        return $stockbroker;
    }
}
