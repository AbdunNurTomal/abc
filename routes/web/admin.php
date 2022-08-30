<?php
/*
  |--------------------------------------------------------------------------
  | Admin Routes
  |--------------------------------------------------------------------------
 */

use App\Http\Controllers\Admin\DashBoardController;
use Illuminate\Support\Facades\Route;

// Route::middleware('role:admin')->group(function (){
//   Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');
// });
Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');