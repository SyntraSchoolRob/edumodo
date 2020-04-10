@extends('layouts.admin')
@section('title')
    All Products
@endsection
@section('content')
    <div class="col-12">
        <h1>Shop - All Products</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success rounded-pill mb-2" href="{{route('products.create')}}">New Product</a>
    </div>
    {{--<table id="myTable" class="display" style="width:100%">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">photo</th>
            <th scope="row">category</th>
            <th scope="row">schooltype</th>
            <th scope="row">title</th>
            <th scope="row">price</th>
            <th scope="row">description</th>
            <th scope="row">link</th>
        </tr>
        </thead>
        <tbody>
        @if($products)
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>
                        <img height="62" width="62" src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/62x62'}}" alt="product image" class="rounded">
                    </td>

                    <td>
                        {{$product->category ? $product->category_name : 'Uncategorized'}}
                    </td>
                    <td>{{$product->user->name}}</td>
                    <td>{{$product->title}}</td>
                    <td>
                        <a href="{{route('products.edit',$product->id)}}">product Link</a>
                    </td>
                    <td>slug</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>--}}
@endsection
