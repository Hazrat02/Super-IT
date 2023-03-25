<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use App\Models\product;
use App\Models\addtocard;
use App\Models\order;
use App\Models\orderitem;
use App\Models\reviews;
use Illuminate\Support\Facades\Auth;

class cardordercontroller extends Controller
{

 
   
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

    // order
    public function order()

    {

        $order= order::where('customar_id',Auth::id())->with('orderitem')->get();
        // dd($order);
        return view('user\deshboard\order',compact('order'));
    }
    public function accountdetails()

    {

 
        return view('user\deshboard\accountdetails');
    }
    public function ordermanage()

    {
        $page = 'order';
        if (auth()->user()->role === '0') {

            $order = order::with('orderitem')->get();
            // dd($order);
            return view('admin/ordermanage', compact('order', 'page'));


        }else {
        


        $order= orderitem::where('vandor_id',Auth::id())->with('order')->get();
        // dd($order);
        return view('user\deshboard\ordermanage',compact('order'));
        }
    }
    public function orderview(Request $request)

    {
        $orderid=$request->id;
        $page='order';

       
        // dd($orderitem);
        if (auth()->user()->role==='0') {
            $orderitem = orderitem::where('order_id', $orderid)->with('order')->with('product')->get();
            $order = order::where('id', $orderid)->get()->first();
            return view('admin/orderview', compact('orderitem', 'order', 'page'));
        }else {
            $orderitem = orderitem::where('order_id', $orderid)->where('vandor_id', Auth::id())->with('order')->with('product')->get();
            $order = order::where('id', $orderid)->get()->first();
            return view('user\deshboard\orderview', compact('orderitem', 'order'));
       
        }
    }
    public function orderdelivery(Request $request)

    {
        $orderid=$request->id;

        
        $order= order::where('id',$orderid)->get()->first();
       $order->update(
        [
            'status'=>'deliveryed',
        ]
        );
        // $product->update([
        //     'views' => $oldviews + '1',
        // ]);
        // dd($orderid);
        return redirect()->back()->withmessage('delivery succes');
    }
    public function watchlist(Request $request)

    {
        return view('user\deshboard\watchlist');
    }
    public function myproduct(Request $request)

    {

        $myproduct=product::where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate('1');
        return view('user\deshboard\myproduct',compact('myproduct'));
    }



}
