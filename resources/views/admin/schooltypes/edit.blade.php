@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1><i class="fas fa-graduation-cap pr-2"></i>Edit Schooltype</h1>
        </div>
        <div class="col-12">
            @include('includes.form_error')
            {!! Form::model($schooltype,['method'=>'PATCH', 'action'=>['AdminSchoolTypesController@update',$schooltype->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('type', 'Type:') !!}
                {!! Form::text('type', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update schooltype', ['class'=>'btn btn-warning rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminSchoolTypesController@destroy',$schooltype->id] ]) !!}
            <div class="form-group">
                {!! Form::submit('Delete schooltype', ['class' => 'btn btn-danger rounded-pill']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
