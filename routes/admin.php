<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admincontroller;
use App\Http\Middleware\admin;











Route::middleware(['auth', 'admin'])->group(function () {
 //user manege Route
    Route::get('user/manage', [admincontroller::class, 'userdata'])->name('User.Manage');

    Route::post('user/delete', [admincontroller::class, 'destroy'])->name('user.delete');

    Route::post('user/edit', [admincontroller::class, 'update'])->name('user.edit');

    Route::post('user/edit/store', [admincontroller::class, 'store'])->name('edit.store');
   // Money.Manage
    
});
Route::get('money/manage', [admincontroller::class, 'moneyindex'])->name('Money.Manage');
