<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

// Route::get('dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

// Route::get('sign-up', [AuthController::class, 'register'])->name('register');
// Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
// Route::get('login', function () {
//     return 'Hello World';
// });

// Route::middleware('logoutCheck')->group(function (){
//     //admin login
//     //dd('Check'); exit;
//     //Route::get('log-in', [AuthController::class, 'login'])->name('login');
//     Route::get('login', function () {
//         return 'Hello World';
//     });
//     Route::post('log-in', [LoginController::class, 'postLogin'])->name('login.post');
//     // Route::post('get-otp', [LoginController::class, 'getOtp'])->name('login.otp');
//     // Route::post('submit-otp', [LoginController::class, 'postLogin'])->name('login.otp.submit');
//     //admin logout
// });
// Route::get('activation/{email}/{activationCode}',[LoginController::class,'activation']);


Route::middleware('auth')->group(__DIR__ . '/web/super.php');
Route::middleware('auth')->group(__DIR__ . '/web/admin.php');
Route::middleware('auth')->group(__DIR__ . '/web/hr_admin.php');
Route::middleware('auth')->group(__DIR__ . '/web/hr_senior.php');
Route::middleware('auth')->group(__DIR__ . '/web/hr_junior.php');

require __DIR__.'/auth.php';