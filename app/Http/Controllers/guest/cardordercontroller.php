<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cardordercontroller extends Controller
{
    public function addcard()
    {
        return view('user\parsials\card');
    }
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
}
