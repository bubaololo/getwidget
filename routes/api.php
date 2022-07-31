<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\RegFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Resources\WidgetCollection;
use App\Models\Widget;
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


Route::get('/dashboard/{locale?}', [DashboardController::class, 'index']);
    

});

Route::get('/widgets', function () {
    return new WidgetCollection(Widget::all());
});


