<?php
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\sociallog;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('User/Manage', [admincontroller::class,'userdata'])->name('User.Manage');

// Route::get('/user', [admincontroller::class, 'userdata'])->name('User.Manage');

Route::get('/',[productcontroller::class,'getproduct']
)->name('home');

Route::middleware([
    'auth:sanctum',
    
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//  google auth----------------------
Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('log.google');

Route::get('/login/google/auth', [sociallog::class, 'googlestore']);


//  fb auth----------------------
Route::get('/fb/auth/redirect', [sociallog::class, 'redirectToFacebook'])->name('log.fb');
Route::get('/fb/auth', [sociallog::class, 'handleFacebookCallback']);

//  github auth----------------------
Route::get('/github/auth/redirect', [sociallog::class, 'redirectToProvider'])->name('log.github');
Route::get('/auth/github', [sociallog::class, 'handleProviderCallback']);


// SSLCOMMERZ Start


Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
