@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1><i class="fas fa-camera-retro pr-2"></i>Upload Media</h1>
        </div>
        <div class="col-12">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminMediasController@store', 'class'=>'dropzone rounded']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>
@endsection
