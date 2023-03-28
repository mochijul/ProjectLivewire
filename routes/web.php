<?php

use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\LoginForm;
use App\Http\Livewire\Auth\RegisterForm;
use App\Http\Livewire\User\UserEdit;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::group(['prefix'=>'user','middleware'=>'guest'],function(){
    Route::view('/register','auth.register')->name('register');
    Route::view('/login','auth.login')->name('login');
});

Route::group(['prefix'=>'dashboard','middleware'=>['auth','role:superadmin']],function(){
    Route::view('/user/manage','user.manageuser')->name('manageuser');
    Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('editeuser');
});

Route::group(['prefix'=>'dashboard','middleware'=>['auth','role:user,admin,superadmin']],function(){
    Route::view('/product/manage','product.manageproduct')->name('manageproduct');
});

Route::group(['prefix'=>'dashboard','middleware'=>['auth']],function(){
    Route::view('/','main')->name('dashboard');
});


