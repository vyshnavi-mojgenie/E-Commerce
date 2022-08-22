<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    
    return view('login');
});

Route::get('/logout', function () {
    
    session()->forget('user');
    return redirect('login');
});
//Route::get('/',[UserController::class,'log'])->name('log');

Route::view('/register','register');

Route::post('/login',[UserController::class,'login'])->name('login');

Route::post('/register',[UserController::class,'register'])->name('register');

Route::get('/',[ProductController::class,'list'])->name('home');
Route::get('/list',[ProductController::class,'list'])->name('list');

 //Route::post('/logout',[UserController::class,'logout'])->name('logout');
 Route::get('detail/{id}',[ProductController::class,'detail'])->name('detail');

 Route::post('add_to_cart',[ProductController::class,'addToCart'])->name('addToCart');
 Route::get('cartlist',[ProductController::class,'cartlist'])->name('cartlist');
 Route::get('removecart/{id}',[ProductController::class,'removeCart'])->name('removeCart');
 Route::get('ordernow',[ProductController::class,'orderNow'])->name('orderNow');
 Route::post('orderplace',[ProductController::class,'orderPlace'])->name('orderPlace');
 Route::get('myorders',[ProductController::class,'myOrders'])->name('myOrders');
