<?php

use App\Http\Controllers\UsersController;
use DebugBar\DebugBar;
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

// Route::view('/users', 'users');
// TODO add Is admin restriction 
Route::resource('users',  UsersController::class);
