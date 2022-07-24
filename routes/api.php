<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/register/{locale?}', function ($locale = 'en'){
   
    App::setLocale($locale);
   
    
    return __('register.data');
});
Route::get('/home', function (){
   
    return 'домашний экран админки';
});

// Route::get('/register/{locale?}', [UserController::class, 'index']);


