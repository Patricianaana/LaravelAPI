<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('signup', function(){
    return view('register');
});
Route::get('login', function(){
    return view('owner');
});
Route::post('login', [UserController::class, 'Login']);
Route::post('signup',[UserController::class,'index']);
Route::get('user',[MemberController::class, 'index']);//for one to one relations
Route::get('users',[MemberController::class, 'oneMany']);//for one to many

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
