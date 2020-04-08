@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Edit Post</h1>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-8">
                    @include('includes.form_error')
                    {!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id],
                    'files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category_id', 'Category:') !!}
                        {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control'])
                         !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('photo_id', 'Photo:') !!}
                        {!! Form::file('photo_id', null, ['class'=>'form-control'])
                         !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Description:') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control'])
                         !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Update Post', ['class'=>'btn btn-warning rounded-0'])
                         !!}
                    </div>

                    {!! Form::close() !!}
                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id] ]) !!}
                    <div class="form-group">
                        {!! Form::submit('Delete post', ['class' => 'btn btn-danger rounded-0']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="{{$post->photo ? asset($post->photo->file) : 'http://place-hold
                    .it/400x400'}}"
                         alt="">
                </div>
            </div>

        </div>
    </div>

@endsection
