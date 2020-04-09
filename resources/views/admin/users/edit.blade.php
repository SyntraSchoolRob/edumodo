@extends('layouts.admin')
@section('title')
    User toevoegen
@endsection
@section('content')
    <div class="col-12">
        <h1>Edit {{ $user->first_name.' '.$user->last_name }}</h1>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-6">
                @include('includes.form_error')
                {!! Form::open(['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}
                <div class="d-md-flex">
                    <div class="form-group">
                        {!! Form::label('first_name', 'First name:') !!}
                        {!! Form::text('first_name', $user->first_name,['class'=>'form-control rounded-pill']) !!}
                    </div>
                    <div class="form-group ml-md-5">
                        {!! Form::label('last_name', 'Last name:') !!}
                        {!! Form::text('last_name', $user->last_name,['class'=>'form-control rounded-pill']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'E-mail:') !!}
                    {!! Form::text('email', $user->email,['class'=>'form-control rounded-pill']) !!}
                </div>
                @if($user->id != 1 and $user->id != 2)
                <div class="form-group">
                    {!! Form::label('roles[]', 'Role:') !!}
                    {!! Form::select('roles[]',$roles, $user->roles->pluck('id')->toArray(),
                    ['class'=>'form-control', 'multiple'=>'multiple'])
                     !!}
                </div>
                @endif
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password',['class'=>'form-control rounded-pill']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control rounded-pill']) !!}
                </div>
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="form-group mr-3">
                            {!! Form::submit('Update user', ['class' => 'btn btn-warning rounded-pill']) !!}
                        </div>
                        {!! Form::close() !!}

                        @if($user->id != 1 and $user->id !=2)
                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id] ]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete user', ['class' => 'btn btn-danger rounded-pill']) !!}
                            </div>
                        {!! Form::close() !!}
                            @endif
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img width="185" height="185" class="img-fluid rounded" src="{{$user->photo ? asset($user->photo->file) : asset('images/userImage.png') }}" alt="user image">
            </div>
        </div>
    </div>


@endsection
