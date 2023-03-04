<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller;

use App\Models\User;
use App\Models\product;
use App\Models\reviews;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function addproduct()
    {
        return View('user\deshboard\addproduct');
    }
    public function createproduct(Request $request)
    {
        $image = [];

        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $name = rand(0000000, 999999) . $file->getClientOriginalName();
                $save = $file->storeAs('public/product', $name);
                $image[] = $name;
            }
        }

        product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'user_id' => $request->user_id,
            'category' => $request->category,
            'title' => $request->title,
            'discount' => $request->discount,
            'delivery_fee' => $request->delivery_fee,
            'discription' => $request->discription,
            'photo' => implode('|', $image),
        ]);

        return redirect(route('dashboard'))->withMessage('product added done');
    }

    public function getproduct()
    {
        $product = product::paginate('8');
        $page = 'home';

        // dd($product);
        // return $product;
        return view('home', compact('product', 'page'));
    }

    public function viewsproduct(Request $request)
    {
        $id = $request->id;

        $product = product::where('id', $id)
            ->get()
            ->first();

        $vandorID = $product->user_id;
        $vandorProduct = product::where('user_id', $vandorID)
            ->take(5)
            ->orderBy('id', 'DESC')
            ->get();

        $relative = product::where('category', $product->category)
            ->get()
            ->all();

        // dd($vandorID);

        $vendor = User::where('id', $vandorID)->get();

        $oldviews = $product->views;

        $product->update([
            'views' => $oldviews + '1',
        ]);

        $reviews = reviews::where('product_id', $id)
            ->orderBy('id', 'DESC')
            ->get();

        return view('productDetails', compact('product', 'relative', 'vandorProduct', 'vendor', 'reviews'));
    }

    public function makereviews(Request $request)
    {
        reviews::create([
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'reting' => $request->rating,
            'comment' => $request->comment,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()
            ->back()
            ->withMessage('Your reviews succesfully add! ');
    }
}
