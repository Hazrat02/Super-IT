<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\money;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

use Illuminate\Container\Container;
use Illuminate\Pagination\LengthAwarePaginator;
use App\CustomClasses\ColectionPaginate;
use App\Http\Middleware\admin;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\AppServiceProvider;
 



class productcontroller extends Controller{



public function addproduct()
{
    return 'hh';
}










}