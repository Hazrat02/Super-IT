<?php
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\sociallog;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Route;
;

Route::middleware(['auth', 'admin',])->group(function () {


    

});
Route::get('/add.product',[productcontroller::class,'addproduct'])->name('add.product');
Route::get('/views.product/[$id]',[productcontroller::class,'viewsproduct'])->name('views.product');
Route::post('/add.product',[productcontroller::class,'createproduct'])->name('create.product');
Route::post('/reviews',[productcontroller::class,'makereviews'])->name('reviews');
Route::get('/search',[productcontroller::class,'search'])->name('search');
Route::get('/filterproduct/[$data]',[productcontroller::class,'filterproduct'])->name('filterproduct');
Route::get('/productdelete/[$id]',[productcontroller::class, 'productdelete'])->name('productdelete');
Route::get('/orderdelete/[$id]',[productcontroller::class, 'orderdelete'])->name('orderdelete');
Route::get('/productedit/[$id]',[productcontroller::class, 'productedit'])->name('productedit');
Route::get('/productreviews',[productcontroller::class, 'productreviews'])->name('productreviews');
Route::post('/producteditStore',[productcontroller::class, 'producteditStore'])->name('producteditStore');
