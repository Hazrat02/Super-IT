<?php
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\sociallog;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Route;
;

Route::middleware(['auth','seller'])->group(function () {
    // seller && admin
    Route::get('/productedit/[$id]', [productcontroller::class, 'productedit'])->name('productedit');
    Route::get('/add.product', [productcontroller::class, 'addproduct'])->name('add.product');
    Route::post('/add.product', [productcontroller::class, 'createproduct'])->name('create.product');
    Route::get('/productdelete/[$id]', [productcontroller::class, 'productdelete'])->name('productdelete');
    Route::post('/producteditStore', [productcontroller::class, 'producteditStore'])->name('producteditStore');

});



// all User
Route::get('/views.product/[$id]',[productcontroller::class,'viewsproduct'])->name('views.product');
Route::post('/reviews',[productcontroller::class,'makereviews'])->name('reviews');
Route::get('/search',[productcontroller::class,'search'])->name('search');
Route::get('/filterproduct/[$data]',[productcontroller::class,'filterproduct'])->name('filterproduct');
Route::get('/productreviews',[productcontroller::class, 'productreviews'])->name('productreviews');

