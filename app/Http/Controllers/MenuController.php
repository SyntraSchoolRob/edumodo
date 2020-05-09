<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Photo;
use App\Product;
use App\Schooltype;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    //--------------------shop page functions
    public function shop()
    {
        $categories = Category::all();
        $schooltypes = Schooltype::all();
        $products = Product::with(['schooltype','photo', 'category'])->get();

        return view('shop', compact('products','categories', 'schooltypes'));
    }
    //filter
    public function productsPerCategory($id){
        $categories = Category::all();
        $schooltypes = Schooltype::all();
        $products = Product::with(['category','photo', 'schooltype'])->where('category_id', '=', $id)->get();
        return view('shop', compact('products', 'categories', 'schooltypes'));
    }

    public function productsPerSchoolType($id){
        $schooltypes = Schooltype::all();
        $categories = Category::all();
        $products = Product::with(['schooltype','photo', 'category'])->where('schooltype_id', '=', $id)->get();
        return view('shop', compact('products', 'schooltypes', 'categories'));
    }

    //--------------------index product-page
    public function product($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::pluck('name')->all();
        $schooltypes = Schooltype::pluck('type')->all();
        return view('product', compact('product', 'categories', 'schooltypes'));
    }



    //--------------------index contact-page
    public function contact()
    {
        return view('contact');
    }
    public function contactform(Request $request)
    {
        Contact::create($request->all());
        return redirect('contact');
    }
    //--------------------shopping-cart functions
    public function cart()
    {
        return view('cart');
    }


}
