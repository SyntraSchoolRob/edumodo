@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <h1>Create Schooltype</h1>
    </div>
    <div class="col-12 col-md-6">
        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminSchoolTypesController@store', 'files'=>false]) !!}
        <div class="form-group">
            {!! Form::label('type', 'Type:') !!}
            {!! Form::text('type', null, [' class'=>'form-control', "required"]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Schooltype', ['class'=>'btn btn-success rounded-pill'])
             !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
