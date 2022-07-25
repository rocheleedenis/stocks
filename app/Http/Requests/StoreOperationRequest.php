<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOperationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'stock_id' => 'required|exists:App\Models\Stock,id',
            'trading_note_id' => 'required|exists:App\Models\TradingNote,id',
            'unit_price' => 'required',
            'quantity' => 'required',
            'type' => 'required',
        ];
    }
}
