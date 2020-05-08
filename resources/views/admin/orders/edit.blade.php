@extends('layouts.admin')
@section('title')
    Edit Order
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1><i class="fas fa-shipping-fast pr-2"></i>View/ Edit Order Details</h1>
        </div>
        <div class="col-md-6">
            {!! Form::model($order,['method'=>'PATCH', 'action'=>['AdminOrdersController@update',$order->id],'files'=>false]) !!}
            <div class="form-group">
                {!! Form::label('product_id', 'Product id:') !!}
                {!! Form::number('product_id', null, ['class'=>'form-control rounded-pill', "required", 'step' => '0.01', 'step' => '1', 'min'=>'1' ]) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update order', ['class'=>'btn btn-warning rounded-pill']) !!}
            </div>
            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminOrdersController@destroy',$order->id] ]) !!}
            <div class="form-group">
                {!! Form::submit('Delete order', ['class' => 'btn btn-danger rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
