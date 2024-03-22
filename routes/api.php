<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("data",[APIController::class, 'getData']);

Route::get('list',[APIController::class, 'deviceList']);
Route::post('add',[APIController::class, 'addDevice']);
