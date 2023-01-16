<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\guest\cardordercontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Middleware\admin;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('add.card', [cardordercontroller::class,'addcard'])->name('add.card');






Route::get('buy/information', [cardordercontroller::class,'information'])->name('buy.information');
Route::get('buy/information', [cardordercontroller::class,'information'])->name('buy.information');
Route::post('order.information', [cardordercontroller::class,'orderinformation'])->name('order.information');
Route::get('order/payment', [cardordercontroller::class,'orderpayment'])->name('order.payment');

Route::middleware(['auth'])->group(function () { 






    


});
