@extends('layouts.admin')
@section('title')
    Add User
    @endsection
@section('content')
    <div class="col-12">
        <h1>Create a new user</h1>
    </div>
    <div class="col-8">
        @include('includes.form_error')
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true]) !!}
        <div class="d-md-flex">
            <div class="form-group">
                {!! Form::label('first_name', 'First name:') !!}
                {!! Form::text('first_name', null,['class'=>'form-control rounded-pill', "required"] ) !!}
            </div>
            <div class="form-group ml-md-5">
                {!! Form::label('last_name', 'Last name:') !!}
                {!! Form::text('last_name', null,['class'=>'form-control rounded-pill', "required"]) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::text('email', null,['class'=>'form-control rounded-pill', "required"]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Select roles: (hou de ctrl toets ingedrukt om meerdere roles te selecteren') !!}
            {!! Form::select('roles[]', $roles, null,['class'=>'form-control', "required", 'multiple'=>'multiple']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active') , 1 , ['class'=>'form-control', "required"]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password',['class'=>'form-control rounded-pill', "required"]) !!}
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
