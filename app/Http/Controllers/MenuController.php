<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function product($id){
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }
}
