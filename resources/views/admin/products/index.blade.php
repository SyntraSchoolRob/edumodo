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
    <table id="myTable" class="display" style="width:100%">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Photo</th>
            <th scope="row">Category</th>
            <th scope="row">Schooltype</th>
            <th scope="row">Title</th>
            <th scope="row">Created at</th>
            <th scope="row">Update</th>
        </tr>
        </thead>
        <tbody>
        @if($products)
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>
                        <img height="62" width="62"
                             src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/62x62'}}" alt="product image" class="rounded">
                    </td>
                    <td>{{$product->title}}</td>
                    <td>
                        {{$product->title}}
                    </td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->created_at}}</td>
                    <td>update</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection
