<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admincontroller;
use App\Http\Middleware\admin;











Route::middleware(['auth', 'admin'])->group(function () {
 //user manege Route
    Route::get('admin/user/manage', [admincontroller::class, 'userdata'])->name('User.Manage');

    Route::post('admin/user/delete', [admincontroller::class, 'destroy'])->name('user.delete');

    Route::post('admin/user/edit', [admincontroller::class, 'update'])->name('user.edit');

    Route::post('admin/user/edit/store', [admincontroller::class, 'store'])->name('edit.store');
   // Money.Manage
    
});
Route::get('admin/money/manage', [admincontroller::class, 'moneyindex'])->name('Money.Manage');
Route::get('admin/allproduct', [admincontroller::class, 'allproduct'])->name('allproduct');
Route::get('admin/ordermanage', [admincontroller::class, 'ordermanage'])->name('ordermanage');
