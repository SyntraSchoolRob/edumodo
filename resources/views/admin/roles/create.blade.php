@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <h1>Create Roles</h1>
    </div>
    <div class="col-12">
        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminRolesController@store', 'files'=>false]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', "required"]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Role', ['class'=>'btn btn-success rounded-pill'])!!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
