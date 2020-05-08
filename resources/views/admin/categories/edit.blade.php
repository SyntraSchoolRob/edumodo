@extends('layouts.admin')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1><i class="fas fa-stream pr-2"></i>Edit Category</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',$category->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control', "required"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-warning rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy',$category->id] ]) !!}
            <div class="form-group">
                {!! Form::submit('Delete category', ['class' => 'btn btn-danger rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
