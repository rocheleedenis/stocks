<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::get();
    }

    public function show(Company $company)
    {
        return $company;
    }

    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create($request->validated());

        return $company;
    }
}
