<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTradingNoteRequest;
use App\Models\TradingNote;

class TradingNoteController extends Controller
{
    public function index()
    {
        return TradingNote::all();
    }

    public function store(StoreTradingNoteRequest $request)
    {
        $tradingNote = TradingNote::create($request->validated());

        return $tradingNote;
    }

    public function show(TradingNote $tradingNote)
    {
        return $tradingNote;
    }
}
