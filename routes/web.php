<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::get('/home',function()
{
    return view('home');
});

Route::get('/about',function()
{
    return view('about');
});
Route::get('/service',function()
{
    return view('service');
});
Route::get('/login',function()
{
    return view('login');
});
Route::get('/register',function()
{
    return view('register');
});
//Route::post('/register','App\Http\Controllers\UserController@register');
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('users',[UserController::class,'users']);
Route::get('show/{id}',[UserController::class,'show']);
Route::post('/update',[UserController::class,'update']);
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get
('logout',function()
{
    Session::forget('user');
    return redirect('/login');
});
