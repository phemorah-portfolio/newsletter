<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Mail\Subscribed;

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

// Route::get('/subscribers', [SubscriberController::class, 'index']);
// Route::post('subscribers', [SubscriberController::class, 'store']);

Route::resource('subscribers', SubscriberController::class);

Route::resource('posts', PostController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route for mailing
// Route::get('/email', function(){
//     return new Subscribed();
// });

