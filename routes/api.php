<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Public Route
Route::post('/login', [AuthController::class, 'Login']);
Route::post('/register', [AuthController::class,'Register']);


//Protected Route
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('logout', [AuthController::class,'Logout']);
});

