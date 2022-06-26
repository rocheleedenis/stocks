<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockbrokerController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('stockbrokers')
    ->controller(StockbrokerController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/{stockbroker}', 'show');
    });

Route::prefix('companies')
    ->controller(CompanyController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/{company}', 'show');
        Route::post('/', 'store');
    });
