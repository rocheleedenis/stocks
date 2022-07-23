<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTradingNoteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => 'required|date:Y-m-d',
            'taxes' => 'required|integer',
            'stockbroker_id' => 'required|exists:App\Models\Stockbroker,id',
        ];
    }
}
