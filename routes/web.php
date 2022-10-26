<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
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
})->middleware('guest');

Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::resource('users',  UsersController::class)->middleware('auth');
});

Route::middleware(['auth', 'user-role:doctor'])->group(function () {

    Route::get('/scans/{id}/download', [ScansController::class, 'download'])
        ->name('scans.download');

    Route::resource('scans', ScansController::class);

    Route::resource('orientationLtr', OrientationLtrController::class);

    Route::get('/prescriptions/{id}/print', [PrescriptionsController::class, 'print'])
        ->name('prescriptions.print');
    Route::resource('prescriptions', PrescriptionsController::class);
});

Route::middleware(['auth', 'user-role:doctor|secretary'])->group(function () {

    Route::resource('patients', PatientsController::class);

    Route::resource('appointment', AppointmentController::class);
});



Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])
    ->name('login')
    ->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
