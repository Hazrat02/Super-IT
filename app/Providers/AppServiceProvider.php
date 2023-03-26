<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Models\product;
use App\Models\addtocard;
use Illuminate\Support\Facades\Auth;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        // ADD TO CARD
        View::composer('*', function ($view) {
            $data = addtocard::where('customar_id', Auth::id())
                ->with('product')
                ->get();
                View::share('addtocard', $data);

        });
    }
 
}
