<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    $products = \App\Models\Product::skip(0)->take(10)->get();


   return view('home',['products'=>$products]);
});

Route::get('/test');



Route::group(['prefix'=>'category'] , function (){
    Route::get('/{id}/{id2}',function ($id , $id2){
        return "this is category " . $id . ' ' . $id2;
    });
});*/

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index']);

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'getLoginView'])->name( 'login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'doLogin']);

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'getRegisterView']);
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'doRegister']);

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'doLogout']);


Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'getProductView']);


Route::group(['prefix'=>'cart','middleware'=>['auth']],function (){


    Route::post('/add', [\App\Http\Controllers\ProductController::class, 'addItemToCart']);
    Route::get('/view', [\App\Http\Controllers\ProductController::class, 'getCartView']);

});


Route::get('/home',function (){

  $users = \App\Models\User::first();

   return $users;
});


Route::get('/test11/{id?}',function ($id){
    return 'sasasas' . $id;
});


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/home',function (){
        return view('landpage');     });


    });





