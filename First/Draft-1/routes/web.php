<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return 'welcome';
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/client', function () {
    return view('greeting', ['name' => 'James']);
});

Route::get('user', [UserController::class,'users']);