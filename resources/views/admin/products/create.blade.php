@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Create New Product</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'AdminProductsController@store', 'files'=>true]) !!}
            <div class="d-xl-flex">
                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group ml-xl-5">
                    {!! Form::label('price', 'Price $USD :') !!}
                    {!! Form::number('price', 99.99, ['class'=>'form-control rounded']) !!}
                </div>
            </div>
            <div class="d-xl-flex">
                <div class="form-group">
                    {!! Form::label('category_id', 'Category:') !!}
                    {!! Form::select('category_id', [''=> $categories], 2, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group ml-xl-5">
                    {!! Form::label('schooltype_id', 'Schooltype:') !!}
                    {!! Form::select('schooltype_id', [''=>'Choose Schooltype'] + $schooltypes, null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Product', ['class'=>'btn btn-success rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
