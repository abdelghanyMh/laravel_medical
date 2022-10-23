<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\OrientationLtrController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PrescriptionsController;
use App\Http\Controllers\ScansController;
use App\Http\Controllers\UsersController;
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


Route::get('/scans/{id}/download', [ScansController::class, 'download'])->name('scans.download');

Route::resource('scans', ScansController::class);

Route::resource('orientationLtr', OrientationLtrController::class);

Route::resource('patients', PatientsController::class);

Route::resource('appointment', AppointmentController::class);

Route::get('/prescriptions/{id}/print', [PrescriptionsController::class, 'print'])->name('prescriptions.print');
Route::resource('prescriptions', PrescriptionsController::class);
