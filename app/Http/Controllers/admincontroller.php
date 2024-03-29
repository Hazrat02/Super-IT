<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\money;

use Illuminate\Http\Request;



use App\Models\order;
use App\Models\product;
use App\Models\contactUS;

 
class admincontroller extends Controller

{
    function home() {
        $company = 'Super-IT';
        $page = 'home';
        $metatag = 'home';
       
        return view('welcome',compact('page','company'));
    }
    //get all user model data with pagination
    public function userdata()
    {
        $userdata = User::paginate('3');
        $page = 'usermanage';
        return view('admin/usermanage', compact('userdata','page'))->with('succes', 'welcome boss');

    }





    //delete user data
    public function destroy(request $request)
    {
        $id = $request->destroy;

        $res = User::find($id)->delete();

        if ($res) {
            $data = [
                'status' => '1',
                'msg' => 'success',
            ];
        } else {
            $data = [
                'status' => '0',
                'msg' => 'fail',
            ];
        }

        return redirect()->back()->with($data);
    }

    //update page return
    public function update(Request $request)
    {
        $id = $request->update;
        $edituser = user::find($id);
        // dd($edituser);
        return view('admin/useredit', compact('edituser'));
        
    }

    //update user data store
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $id=$request->id;
        
        $user = User::find($id);
        // dd($user);
        $user->update(
            [
                'name' => $request->name,
                'email' => $request->email

            ]
        );
        return redirect(route('User.Manage'))->with('status', 'data edited');


    }
   //================================end=========================

   //=====================================moneymanage=================
   public function moneyindex()
   {
        $money = money::all();
        $page = 'moneymanage';
        // dd($money);
        return view('admin/moneymanage', compact('money','page'))->with('succes', 'welcome boss');
   }





   public function allproduct()
   {
       $product= product::get();
       $page= 'allproduct';

        return view('admin/productmanage',compact('product','page'));
   }



   public function ordermanage()
   {
       $product= order::get();
       $page= 'order';

        return view('admin/productmanage',compact('product','page'));
   }

   public function contactus(Request $request)
   {

    contactUS::create(

        [

            'name'=>$request->name,
            'email'=>$request->email,
            'sms'=>$request->sms,


        ]
        );
        
      

        return redirect()->back()->withmassege('Your mail sent in Our support team!');
   }















}
