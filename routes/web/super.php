<?php
/*
  |--------------------------------------------------------------------------
  | Super Routes
  |--------------------------------------------------------------------------
 */

use App\Http\Controllers\Super\DashBoardController;
use Illuminate\Support\Facades\Route;

// Route::middleware('role:super')->group(function (){
//   Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');
// });
Route::get('dashboard', [DashBoardController::class, 'index'])->name('dashboard');