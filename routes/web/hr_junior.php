<?php
/*
  |--------------------------------------------------------------------------
  | HR Senior Routes
  |--------------------------------------------------------------------------
 */

use App\Http\Controllers\HR\Junior\DashBoardController;
use Illuminate\Support\Facades\Route;

// Route::middleware('role:hr_junior')->group(function (){
//   Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');
// });
Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');