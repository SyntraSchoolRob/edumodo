@extends('layouts.admin')
@section('title')
    All orders
@endsection
@section('content')
    <div class="col-12">
        <h1><i class="fas fa-shipping-fast pr-2"></i>Orders</h1>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">User_id</th>
                <th scope="row">Product_id</th>
                <th scope="row">Items</th>
                <th scope="row">Total Price</th>
                <th scope="row">Delivery</th>
                <th scope="row">Created_at</th>
                <th scope="row">Updated_at</th>
                <th scope="row">Order Details</th>
            </tr>
            </thead>
            <tbody>
            @if($orders)
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->product_id}}</td>
                        <td>{{$order->items}}</td>
                        <td>{{$order->totalprice}}</td>
                        <td>{{$order->delivery}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->updated_at}}</td>
                        <td><a href="{{route('orders.edit',$order->id)}}">Details</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
