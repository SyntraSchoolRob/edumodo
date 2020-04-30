@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Roles</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::model($role,['method'=>'PATCH', 'action'=>['AdminRolesController@update',$role->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control', "required"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update Role', ['class'=>'btn btn-warning rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
            @if($role->id != 1 and $role->id !=3)
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRolesController@destroy',$role->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete role', ['class' => 'btn btn-danger rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
                @endif
        </div>
    </div>
@endsection
