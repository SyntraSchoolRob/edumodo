<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    //
    public function shop()
    {
        return view('shop');
    }
    public function product($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function cart()
    {
        return view('cart');
    }

}
