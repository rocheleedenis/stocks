<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules() : array
    {
        return [
            'name' => 'required|string',
            'full_name' => 'required|string',
            'cnpj' => 'required|string',
            'sector' => 'required|string',
            'subsector' => 'required|string',
        ];
    }
}
