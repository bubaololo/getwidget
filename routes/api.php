<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\RegFormController;

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
// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/register/{locale?}', function ($locale = 'ru'){
   
//     App::setLocale($locale);
   
//     return __('register.data');
// });


Route::get('/home', function (Request $request){
   
    return $request->user();
});

Route::get('/register/{locale?}', [RegFormController::class, 'index']);

Route::group(['middleware' => 'auth:sanctum'], function(){

// Route::get('/get', 'GetController');
    

});


