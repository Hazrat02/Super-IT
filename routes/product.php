<?php
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\sociallog;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Route;
;

Route::middleware(['auth', 'admin',])->group(function () {


    

});
Route::get('/add.product',[productcontroller::class,'addproduct'])->name('add.product');
Route::post('/add.product',[productcontroller::class,'createproduct'])->name('create.product');
