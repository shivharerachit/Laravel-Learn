<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'post'], '/', function () {
//     // ...
// });

// Route::any('/', function () {
//     // ...
// });


// use Illuminate\Http\Request;

// Route::get('/users', function (Request $request) {
//     // ...
// });

// Route::redirect('/here', '/there');

// Route::redirect('/here', '/there', 301);

// Route::permanentRedirect('/here', '/there');

// Route::view('/welcome', 'welcome');

// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


Route::post('user/create','App\Http\Controllers\UserController@create');