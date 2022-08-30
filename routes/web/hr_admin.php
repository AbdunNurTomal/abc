<?php
/*
  |--------------------------------------------------------------------------
  | HR Admin Routes
  |--------------------------------------------------------------------------
 */

use App\Http\Controllers\HR\Admin\DashBoardController;
use Illuminate\Support\Facades\Route;

// Route::middleware('role:hr_admin')->group(function (){
//   Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');
// });
Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');