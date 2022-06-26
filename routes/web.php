<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FundManagerController;
use App\Http\Controllers\StockbrokerController;
use App\Http\Controllers\InvestmentFundController;

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

Route::prefix('fund-managers')
    ->controller(FundManagerController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/{fundManager}', 'show');
        Route::post('/', 'store');
    });

Route::prefix('investment-funds')
    ->controller(InvestmentFundController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/{investmentFund}', 'show');
        Route::post('/', 'store');
    });