@extends('layouts.admin')
@section('title')
    All comments
@endsection
@section('content')
        <div class="col-12">
            <h1>Comments</h1>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="row">Id</th>
                    <th scope="row">Author</th>
                    <th scope="row">E-mail</th>
                    <th scope="row">Body</th>
                    <th scope="row">Created_at</th>
                    <th scope="row">Updated_at</th>
                </tr>
                </thead>
                <tbody>
                @if($comments)
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{$comment->id}}</td>
                            <td>{{$comment->author}}</td>
                            <td>{{$comment->email}}</td>
                            <td>{{$comment->body}}</td>

                            <td><a class="btn btn-success rounded-0" href="{{route('home.post', $comment->post->id) }}">View Post</a></td>
                            <td><a class="btn btn-success rounded-0" href="{{route('commentreplies.show',$comment->id)}}">View Replies</a></td>
                            <td>{{$comment->created_at->diffForHumans()}}</td>
                            <td>{{$comment->updated_at->diffForHumans()}}</td>
                            <td>
                                @if($comment->is_active == 1)
                                    {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentController@update',$comment->id]]) !!}
                                    <input type="hidden" name="is_active" value="0">
                                    <div class="form-group">
                                        {!! Form::submit('Un-approve', ['class'=>'btn btn-warning rounded-0']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                @else
                                    {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentController@update',$comment->id]]) !!}
                                    <input type="hidden" name="is_active" value="1">
                                    <div class="form-group">
                                        {!! Form::submit('Approve', ['class'=>'btn btn-warning rounded-0']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                @endif
                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['PostCommentController@destroy',$comment->id]]) !!}
                                <div class="form-group">
                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger rounded-0']) !!}
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
@endsection
