<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComplainController;
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



    Route::post('login', [AuthController::class,'login']);
    Route::post('register', [AuthController::class,'register']);
    Route::post('addcomplain', [ComplainController::class,'addComplain']);
    Route::get('list', [ComplainController::class,'list']);
    Route::delete('delete/{id}', [ComplainController::class,'delete']);
    Route::get('complain/{id}', [ComplainController::class,'getComplain']);
    Route::post('updateComplain/', [ComplainController::class,'updateComplain']);
    Route::resource('users', UserController::class);
    Route::group(['middleware'=>'api'], function(){
        Route::post('logout', [AuthController::class,'logout']);
        Route::post('refresh', [AuthController::class,'refresh']);
        Route::post('me', [AuthController::class,'me']);
    });


