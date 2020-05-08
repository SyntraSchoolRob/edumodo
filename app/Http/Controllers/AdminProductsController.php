<?php

namespace App\Http\Controllers;

use App\Category;
use App\Photo;
use App\Product;
use App\Schooltype;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::withTrashed()->with(['schooltype','photo', 'category'])->paginate();
        return view('admin.products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();
        $schooltypes = Schooltype::pluck('type', 'id')->all();
        return view('admin.products.create', compact('categories', 'schooltypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['slug'] = Str::slug($request->title,'-');
        Product::create($input);
        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id', 'deleted_at')->all();
        $schooltypes = Schooltype::pluck('type', 'id')->all();

        return view('admin.products.edit', compact('product', 'categories', 'schooltypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $input['slug'] = Str::slug($request->title,'-');
        $product->update($input);
        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        //if($product->photo !== null){
            //unlink(public_path() . $product->photo->file);
            //$product->photo->delete();
        //}
        $product->delete();
        //$product->category()->detach();
        //$product->schooltype()->detach();

        Session::flash('deleted_product', 'The product is deleted');
        return redirect('admin/products');
    }

    public function productsPerCategory($id){
        $categories = Category::all();
        $products = Product::withTrashed()->with(['category','schooltype','photo'])->where('category_id', '=', $id)->get();
        return view('admin.products.index', compact('products', 'categories'));
    }

    public function productrestore($id){
        Product::onlyTrashed()->where('id',$id)->restore();
        Session::flash('softdeleted_product', 'The product has been restored');
        return redirect('admin/products');
    }
}
