<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvestmentFundRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'code' => 'required|string',
            'type' => 'required|string',
            'segment' => 'required|string',
            'cnpj' => 'required|string',
            'fund_manager_id' => 'required|integer',
        ];
    }
}
