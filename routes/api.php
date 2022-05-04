<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/products','App\Http\Controllers\ProductController');
Route::group(['prefix'=>'products'],function(){
    Route::apiResource('/{product}/reviews','App\Http\Controllers\ReviewController');
});