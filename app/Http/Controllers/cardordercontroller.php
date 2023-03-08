<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use App\Models\product;
use App\Models\addtocard;
use App\Models\reviews;
use Illuminate\Support\Facades\Auth;

class cardordercontroller extends Controller
{

 
       
   
    public function information()
    {
        return view('user\parsials\information');
    }
    public function orderinformation()
    {
        return view('user\parsials\sipping');
    }
    public function orderpayment()
    {
        return view('user\parsials\orderpayment');
    }
    public function addtocard(Request $request)
    {
        $product = product::where('id', $request->product_id)
            ->get()
            ->first();
        $total_price = $product->price * $request->quantity;

        $customar_id = Auth::id();

         addtocard::create([
            'product_id' => $request->product_id,
            'size' => $request->size,
            'customar_id' => $customar_id,
            'quantity' => $request->quantity,
            'total_price' => $total_price,
        ]);
        return redirect()->back()->withmessage('Product add to card done!');
    }
    // card prodct delete
    function cardremove(Request $request)
    {
        
        addtocard::destroy($request->id);
        return redirect()->back()->withmessage('Product Remove done!');
    }

    // checkout
    public function checkout()
    {
        return view('user\deshboard\checkout');
    }
    public function card()
    {
        return view('user\deshboard\card');
    }
}
