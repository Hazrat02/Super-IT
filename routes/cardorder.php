<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cardordercontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Middleware\admin;
use App\Http\Middleware\seller;
use Illuminate\Routing\Route as RoutingRoute;

Route::middleware(['auth'])->group(function () {
    // USER DESHBOARD
    Route::post('order/addtocard', [cardordercontroller::class, 'addtocard'])->name('addtocard');
    Route::get('order', [cardordercontroller::class, 'order'])->name('order');

    Route::get('accountdetails', [cardordercontroller::class, 'accountdetails'])->name('accountdetails');
    Route::post('user/acountdetails', [cardordercontroller::class, 'acountdetails'])->name('acountdetails');
    Route::post('card.remove', [cardordercontroller::class, 'cardremove'])->name('card.remove');
    Route::get('checkout', [cardordercontroller::class, 'checkout'])->name('checkout');
    Route::get('card', [cardordercontroller::class, 'card'])->name('card');
    Route::get('watchlist', [cardordercontroller::class, 'watchlist'])->name('watchlist');

    

});



Route::middleware(['auth', 'seller'])->group(function () {
    // seller
    Route::get('/orderdelete/[$id]', [productcontroller::class, 'orderdelete'])->name('orderdelete');
    Route::get('order/manage', [cardordercontroller::class, 'ordermanage'])->name('order.manage');
    Route::get('order/orderview', [cardordercontroller::class, 'orderview'])->name('orderview');
    Route::get('order/delivery/[$id]', [cardordercontroller::class, 'orderdelivery'])->name('order.delivery');
    Route::get('myproduct', [cardordercontroller::class, 'myproduct'])->name('myproduct');
});
