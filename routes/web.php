<?php

use App\Http\Controllers\OrientationLtrController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ScansController;
use App\Http\Controllers\UsersController;
use App\Models\Patient;
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

Route::resource('scans', ScansController::class);

// Route::get('/print', [OrientationLtrController::class, 'print']);
Route::resource('orientationLtr', OrientationLtrController::class);

Route::resource('patients', PatientsController::class);
