<?php

use Illuminate\Support\Facades\Route;

Route::get('admin' , function (){
   return 'admin dashboard';
});



Route::get('/dash',[\App\Http\Controllers\Front\Dashboard::class,'getView']);
Route::get('/dash1',[\App\Http\Controllers\Front\TestController::class,'getView1'])->middleware('auth');
Route::get('/dash2',[\App\Http\Controllers\Front\TestController::class,'getView2']);
Route::get('/dash3',[\App\Http\Controllers\Front\TestController::class,'getView3']);
Route::get('/dash4',[\App\Http\Controllers\Front\TestController::class,'getView4']);

