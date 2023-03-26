<?php

namespace App\Http\Controllers;

use App\Models\order;

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

                $file->move(public_path('product'), $name);

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
        $product = product::orderBy('id', 'DESC')->paginate(6);
        $page = 'home';
        $topproduct = product::orderBy('views', 'DESC')
            ->get()
            ->take(10);
        // dd($topproduct);

        return view('home', compact('product', 'page', 'topproduct'));
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
    public function search(Request $request)
    {
        $search = $request;
        $query = $request->name;
        $category = $request->category;
        // $orderby='desc';

        // dd($orderBy);

        $data = product::when($query, function ($queryBuilder, $query) {
            return $queryBuilder->where(function ($queryBuilder) use ($query) {
                $queryBuilder
                    ->where('product_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('discription', 'LIKE', '%' . $query . '%')
                    ->orWhere('title', 'LIKE', '%' . $query . '%');
            });
        })->when($category, function ($queryBuilder, $category) {
            return $queryBuilder->where('category', $category);
        });
        if (isset($request->count)) {
            $data = $data->take($request->count); // Limit the results to the specified number of items
        }
        if (isset($request->orderby)) {
            $orderBy = unserialize($request->orderby);
            $data = $data->orderBy($orderBy['key'], $orderBy['value'])->get(); // Order the results by price in the specified direction
        } else {
            $data = $data->get();
        }


        return view('filterproduct', compact('data', 'search'));
    }

    public function filterproduct(Request $request)
    {
        $data = json_decode($request->bal);
        $lowToHight = collect($data->data)
            ->sortByDesc('price')
            ->values()
            ->all();
        $HightTolow = collect($data->data)
            ->sortBy('price')
            ->values()
            ->all();

        dd($HightTolow);


    }
    public function productdelete(Request $request)
    {
        $product = product::destroy($request->id);
        return redirect()
            ->back()
            ->withMessage('product deleted!');
    }
    public function orderdelete(Request $request)
    {
        $product = order::destroy($request->id);
        return redirect()
            ->back()
            ->withMessage('Order deleted!');
    }
    public function productedit(Request $request)
    {
        $product = product::where('id', $request->id)
            ->get()
            ->first();
        
        return View('admin/productedit', compact('product'));
    }
    public function producteditStore(Request $request)
    {
       
    $product = product::where('id', $request->id)
        ->get()
        ->first();

    if ($request->file('image') != null) {
        $image = [];

        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $name = rand(0000000, 999999) . $file->getClientOriginalName();

                $file->move(public_path('product'), $name);

                $image[] = $name;
                
            }
        }

        $photo = implode('|', $image);
    } else {
        $photo = $product->photo;
    }

    $product->update([
        'product_name' => $request->product_name,
        'price' => $request->price,
        'user_id' => $product->user_id,
        'category' => $request->category,
        'title' => $request->title,
        'discount' => $request->discount,
        'delivery_fee' => $request->delivery_fee,
        'discription' => $request->discription,
        'photo' => $photo,
    ]);

    return redirect()->back()->withMessage('product Update Succesfully done');
}

    public function productreviews(Request $request)
    {
       
    $reviews = reviews::get();


    return view('admin/productReviews',compact('reviews'));

 
}
}
