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





Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', [admin_con::class, 'index']) ->name('admin.dashboard');
        });
        Route::get('admin/category_list_view',[admin_con::class,'category_list'])->name('category_listing');


        Route::get('admin/add_category',[admin_con::class,'add_category_view'])->name('add_category');
        Route::post('admin/save_category',[admin_con::class,'save_category'])->name('save_category');
        Route::get('admin/view_category/{id}/{mode?}',[admin_con::class,'view_category'])->name('view_category');
        Route::put('admin/view_category/{id}',[admin_con::class,'edit_category'])->name('edit_category');
        Route::delete('admin/delete_category/{id}',[admin_con::class,'delete_category'])->name('delete_category');



        


        // Route::get('/packages', [PackageController::class, 'index'])
        //     ->name('admin.packages');



/* Optional */
Route::view('boot','boot');
