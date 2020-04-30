@extends('layouts.admin')
@section('title')
    Edit Product
@endsection
@section('content')
    <div class="col-12">
        <h1>Edit {{ $product->title }}</h1>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                @include('includes.form_error')
                {!! Form::open(['method'=>'PATCH', 'action'=>['AdminProductsController@update', $product->id],'files'=>true]) !!}
                <div class="d-md-flex">
                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', $product->title,['class'=>'form-control rounded']) !!}
                    </div>
                    <div class="form-group ml-md-5">
                        {!! Form::label('price', 'Price $USD :') !!}
                        {!! Form::number('price', $product->price,['class'=>'form-control rounded']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::textarea('description', $product->description,['class'=>'form-control rounded']) !!}
                </div>
                <div class="d-xl-flex">
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category:') !!}
                        {!! Form::select('category_id', ['Choose Category'=> $categories], $product->category->id, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group ml-xl-5">
                        {!! Form::label('schooltype_id', 'Schooltype:') !!}
                        {!! Form::select('schooltype_id', ['Choose Schooltype'=> $schooltypes], $product->schooltype->id, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'Slug:') !!}
                    {!! Form::text('slug',$product->slug,['class'=>'form-control rounded']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control rounded']) !!}
                </div>
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="form-group mr-3">
                            {!! Form::submit('Update product', ['class' => 'btn btn-warning rounded-pill']) !!}
                        </div>
                        {!! Form::close() !!}
                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id] ]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete product', ['class' => 'btn btn-danger rounded-pill']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img width="185" height="200" class="img-fluid rounded" src="{{$product->photo ? asset($product->photo->file) : asset('images/website/shopImg.png') }}" alt="product image">
            </div>
        </div>
    </div>
@endsection

