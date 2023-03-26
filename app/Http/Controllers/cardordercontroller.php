<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use App\Models\product;
use App\Models\addtocard;
use App\Models\order;
use App\Models\orderitem;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;

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
        return redirect()
            ->back()
            ->withmessage('Product add to card done!');
    }
    // card prodct delete
    function cardremove(Request $request)
    {
        addtocard::destroy($request->id);
        return redirect()
            ->back()
            ->withmessage('Product Remove done!');
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
        $order = order::where('customar_id', Auth::id())
            ->with('orderitem')
            ->get();
  
        return view('user\deshboard\order', compact('order'));
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
         
            return view('admin/ordermanage', compact('order', 'page'));
        } else {
            $order = orderitem::where('vandor_id', Auth::id())
                ->with('order')
                ->get();
          
            return view('user\deshboard\ordermanage', compact('order'));
        }
    }
    public function orderview(Request $request)
    {
        $orderid = $request->id;
        $page = 'order';

        
        if (auth()->user()->role === '0') {
            $orderitem = orderitem::where('order_id', $orderid)
                ->with('order')
                ->with('product')
                ->get();
            $order = order::where('id', $orderid)
                ->get()
                ->first();
            return view('admin/orderview', compact('orderitem', 'order', 'page'));
        } else {
            $orderitem = orderitem::where('order_id', $orderid)
                ->where('vandor_id', Auth::id())
                ->with('order')
                ->with('product')
                ->get();
            $order = order::where('id', $orderid)
                ->get()
                ->first();
            return view('user\deshboard\orderview', compact('orderitem', 'order'));
        }
    }
    public function orderdelivery(Request $request)
    {
        $orderid = $request->id;

        $order = order::where('id', $orderid)
            ->get()
            ->first();
        $order->update([
            'status' => 'deliveryed',
        ]);
    
        return redirect()
            ->back()
            ->withmessage('delivery succes');
    }
    public function watchlist(Request $request)
    {
        return view('user\deshboard\watchlist');
    }
    public function myproduct(Request $request)
    {
        $myproduct = product::where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->paginate('1');
        return view('user\deshboard\myproduct', compact('myproduct'));
    }








    public function acountdetails(Request $request)
    {
        $user = User::where('id', auth()->user()->id)
            ->get()
            ->first();

        if (isset($request->profile_photo_path)) {
            $file = $request->profile_photo_path;

            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('storage/profile'), $name);
            $dlink = asset('storage/profile');
            if (isset(auth()->user()->socialite_id)) {
                $setlink = $dlink . '/' . $name;
            }else {
                $setlink = $name;
            }
        } else {
            $setlink = $user->profile_photo_path;
        }


        if ($user->email && $user->password != null) {
            if ($request->email === $user->email) {
                Validator::make($request->all(), [
                    'name' => ['required', 'string', 'max:255'],
                    'cur_password' => [
                        'required',

                        function ($attribute, $value, $fail) {
                            if (Hash::check($value, auth()->user()->password) == false) {
                                $fail('Wrong current Password!');
                            }
                        },
                    ],
                ])->validate();
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'profile_photo_path' => $setlink,
                ]);
            } else {
                return redirect()
                    ->back()
                    ->withErrors('You cann"t change email');
            }
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'profile_photo_path' => $setlink,
            ]);
        }




        return redirect()
            ->back()
            ->withMassege('Acount Update done!');

      
    }
}
