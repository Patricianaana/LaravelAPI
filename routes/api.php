<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("data",[APIController::class, 'getData']);

Route::get('list',[APIController::class, 'deviceList']);
Route::post('add',[APIController::class, 'addDevice']);
Route::put('update',[APIController::class, 'updateDevice']);
Route::delete('delete/{id}',[APIController::class, 'deleteDevice']);
Route::get('search/{device_name}',[APIController::class, 'searchDevice']);
Route::post('save', [APIController::class, 'testData']);
Route::get('serch/{name}', [APIController::class, 'searchMember']);
Route::post('upload', [APIController::class, 'uploadFile']);

Route::apiResource('members', UsersController::class);
