@extends('layouts.admin')
@section('content')
        <div class="col-12">
            <h1>Create Categories</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store', 'files'=>false]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-success rounded-0'])
                 !!}
            </div>
            {!! Form::close() !!}
        </div>
@endsection
