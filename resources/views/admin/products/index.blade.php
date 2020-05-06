@extends('layouts.admin')
@section('title')
    All Products
@endsection
@section('content')
    <div class="col-12 d-md-flex">
        <h1>Shop - All Products</h1>

    </div>
    <div class="col-12 mb-4 d-flex justify-content-end" style="margin-top: -50px">
        <a class="btn btn-success rounded-pill" href="{{route('products.create')}}"><i class="fa fa-plus-circle"></i> New Product</a>
    </div>
    <div class="col-12">
        <div class="col-12">
            <div class="d-flex">
                <a href="{{route('products.index')}}"
                   class="badge badge-warning m-1 p-3">All</a>
                @foreach($categories as $category)
                    <a href="{{route('admin.productsPerCategory', $category->id )}}"
                       class="badge badge-warning m-1 p-3">{{$category->name}}</a>
                @endforeach
            </div>
    </div>
    <div class="col-12 mt-3">
        <table id="" class="display table table-bordered table-hover table-sm shadow rounded" style="width:100%">
            <thead class="bg-warning text-white">
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Photo</th>
                <th scope="row"><i class="fab fa-product-hunt"></i> Title</th>
                <th scope="row"><i class="fas fa-tags"></i> Category</th>
                <th scope="row">Schooltype</th>
                <th scope="row">Price</th>
                <th scope="row">Created</th>
                <th scope="row">Updated</th>
                <th scope="row">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($products)
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>
                            <img height="75" width="68" src="{{$product->photo ? asset($product->photo->file) : asset('images/website/shopImg.png') }}" alt="product image" class="rounded">
                        </td>
                        <td><a href="{{route('products.edit',$product->id)}}">{{$product->title}}</a></td>
                        <!--first testing relation (category)  ? then show the category-->
                        <td>{{$product->category ? $product->category->name : 'not categorized'}}</td>
                        <td>{{$product->schooltype ? $product->schooltype->type : 'no type'}}</td>
                        <td>$ {{$product->price}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                            @if($product->deleted_at == null)
                                <a class="btn btn-outline-warning rounded-pill w-100 mb-1" href="{{route('products.edit',$product->id)}}">Edit</a>
                            @endif
                            @if($product->deleted_at != null)
                                <a class="btn btn-outline-danger rounded-pill mb-1 w-100" href="{{route('admin.productrestore',$product->id)}}">Not Active</a>
                            @else
                                {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Active',['class'=>'btn btn-outline-success rounded-pill w-100 mb-1']) !!}
                                </div>
                                {!! Form::close() !!}
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
