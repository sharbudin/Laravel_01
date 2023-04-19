<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\registerUserController;
use App\Http\Controllers\loginUserController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('forgetpass', function () { return view('forgetpass');});
Route::get('verifyOtp', function () { return view('verifyOtp');});
Route::get('resetPassword', function () { return view('resetPassword');});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('logout', function () {
    return view('logout');
})->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('register', [CountryStateCityController::class, 'index']);

Route::post('registerUser', [registerUserController::class, 'insertData']);
Route::post('loginUser', [loginUserController::class, 'VerifyData']);

Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
Route::post('get-phoneCode', [CountryStateCityController::class, 'getPhone']);
Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);

Route::post('ResetPassCode', [loginUserController::class, 'ResetPassCode'])->name('ResetPassCode');
Route::post('OTPverify', [loginUserController::class, 'OTPverify'])->name('OTPverify');
Route::post('ChangePassword', [loginUserController::class, 'ChangePassword'])->name('ChangePassword');

Route::get('Dashbord', [DashboardController::class, 'index']);
Route::post('/store', [DashboardController::class, 'store'])->name('store');
Route::get('/fetchall', [DashboardController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [DashboardController::class, 'delete'])->name('delete');
Route::delete('resetData', [DashboardController::class, 'resetData'])->name('resetData');
Route::get('/edit', [DashboardController::class, 'edit'])->name('edit');
// Route::get('/print', [DashboardController::class, 'print'])->name('print');
Route::post('/update', [DashboardController::class, 'update'])->name('update');

Route::post('import',[DashboardController::class,'import'])->name('import');
Route::get('export', [DashboardController::class, 'export'])->name('export');

Route::get('/print/{id}',[DashboardController::class, 'print'])->name('print');
