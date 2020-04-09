@extends('layouts.admin')
@section('title')
    User toevoegen
    @endsection
@section('content')
    <div class="col-12">
        <h1>Create a new user</h1>
    </div>
    <div class="col-8">
        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::text('email', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::label('Select roles: (hou de ctrl toets ingedrukt om meerdere roles te selecteren') !!}
            {!! Form::select('roles[]', $roles, null,['class'=>'form-control', 'multiple'=>'multiple']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , 0 , ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::submit('Create user', ['class' => 'btn btn-success rounded-pill']) !!}
        </div>
        {!! Form::close() !!}

    </div>


    @endsection
