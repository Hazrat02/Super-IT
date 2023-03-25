<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cardordercontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Middleware\admin;
use Illuminate\Routing\Route as RoutingRoute;



Route::get('buy/information', [cardordercontroller::class,'information'])->name('buy.information');
Route::get('buy/information', [cardordercontroller::class,'information'])->name('buy.information');
Route::post('order.information', [cardordercontroller::class,'orderinformation'])->name('order.information');
Route::get('order/payment', [cardordercontroller::class,'orderpayment'])->name('order.payment');


Route::middleware(['auth'])->group(function () { 


    Route::post('order/addtocard', [cardordercontroller::class,'addtocard'])->name('addtocard');
    Route::get('order', [cardordercontroller::class,'order'])->name('order');
    
    Route::get('accountdetails', [cardordercontroller::class,'accountdetails'])->name('accountdetails');
    Route::post('card.remove' ,[cardordercontroller::class,'cardremove'])->name('card.remove');
    Route::get('checkout' ,[cardordercontroller::class,'checkout'])->name('checkout');
    Route::get('card' ,[cardordercontroller::class,'card'])->name('card');



    


});
// seller
Route::get('order/manage', [cardordercontroller::class,'ordermanage'])->name('order.manage');
Route::get('order/orderview', [cardordercontroller::class,'orderview'])->name('orderview');
Route::get('order/delivery/[$id]', [cardordercontroller::class,'orderdelivery'])->name('order.delivery');
Route::get('watchlist', [cardordercontroller::class, 'watchlist'])->name('watchlist');
Route::get('myproduct', [cardordercontroller::class, 'myproduct'])->name('myproduct');
