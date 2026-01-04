<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin_con;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES (ADD HERE 👇)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', [admin_con::class, 'index'])
            ->name('admin.dashboard');

        Route::get('/packages', [PackageController::class, 'index'])
            ->name('admin.packages');

});

/* Optional */
Route::view('boot','boot');
