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
use App\Models\product;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\AppServiceProvider;

use BaconQrCode\Renderer\Path\Move;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Http\UploadedFile;

use function Termwind\render;

class productcontroller extends Controller
{
    public function addproduct()
    {
        return view('user\deshboard\addproduct');
    }
    public function createproduct(Request $request)
    {
       

        $image = [];

        if ($files = $request->file('image')) {
            foreach ($files as $file) {
               
            $name =rand(0000000,999999) .$file->getClientOriginalName();
             $save = $file->storeAs('public/product',$name);
             $image[]= $name;
            }
        }

       product::create([
            'product_name'=>$request->product_name,
            'price'=>$request->price,
            'user_id'=>$request->user_id,
            'category'=>$request->category,
            'title'=>$request->title,
            'discount'=>$request->discount,
            'delivery_fee'=>$request->delivery_fee,
            'discription'=>$request->discription,
            'photo'=>implode('|',$image),

        ]);
        
        return redirect(route('dashboard'))->withMessage('product added done');
    }

    public function getproduct()
    {
        $product = product::paginate('30');
        $page = 'home';

            // dd($product);
        // return $product;
        return view('home', compact('product', 'page'));
    }

    public function viewsproduct(Request $id)
    {
        $product = product::find($id);
        $productaray = product::find($id)->first();
        $vandorID= $productaray->user_id;
        $vandorProduct = product::where("user_id",$vandorID)->take(5)->orderBy("id",'DESC')->get();

      
        $relative=product::where('category',$productaray->category)->orderBy('id','DESC')->get();
        






        // $imgs=explode('|',$relative->photo);
        // dd($imgs);
        // foreach ($imgs as $img) {
        //     return $img;
        // }
        
        return view('productDetails', compact('product','relative','vandorProduct'));
    }
}
