<?php

use App\Http\Livewire\Auth\LoginForm;
use App\Http\Livewire\Auth\RegisterForm;
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
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::group(['prefix'=>'user'],function(){
    Route::get('/register',RegisterForm::class)->name('register');
    Route::get('/login',LoginForm::class)->name('login');

});


