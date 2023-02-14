<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\toastr;
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

Route::controller(UserController::class)->group(function () {
    Route::post('/register','register'); // Register Process
    Route::post('/login/process','loginProcess')->name('login'); //Login Process 
    Route::get('/logout','logout'); //Logout Authentication 
    Route::get('login','login');  // Redirect View to User Folder Dashboard Blade 
 });



