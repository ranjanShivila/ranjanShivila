<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use Laravel\Socialite\Facades\Socialite;

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



Route::get('/',[auth::class,'register']);

Route::post('registeruser',[auth::class,'registeruser']);

Route::get('/login',[auth::class,'login'])->name('login');
Route::get('/dashboard',[auth::class,'dashboard'])->name('dashboard');
Route::get('/userdash',[auth::class,'userdash'])->name('userdash');


Route::post('loggedin',[auth::class,'loggedin']);

Route::get('/flush',[auth::class,'flush'])->name('flush');


Route::get('login/google',[auth::class,'redirecttogoogle'])->name('login.google');
Route::get('login/google/callback',[auth::class,'redirectgooglecallback']);


Route::get('login/facebook',[auth::class,'redirecttofacebook'])->name('login.facebook');

Route::get('login/facebook/callback',[auth::class,'redirectfacebookcallback']);



