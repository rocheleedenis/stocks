<?php

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
