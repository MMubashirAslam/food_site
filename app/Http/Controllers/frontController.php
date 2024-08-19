<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('front.home');
    }
    public function shop(){
        return view('front.shop');
    }
}
