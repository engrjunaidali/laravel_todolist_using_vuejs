<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items',[itemController::class,'index']);
Route::prefix('/item')->group(function(){
    Route::post('/store',[itemController::class,'store']);
    Route::put('/{id}',[itemController::class,'update']);
    Route::delete('/{id}',[itemController::class,'destroy']);
});