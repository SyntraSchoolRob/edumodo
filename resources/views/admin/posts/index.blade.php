@extends('layouts.admin')
@section('title')
All Posts
@endsection
@section('content')
        <h1>All Posts</h1>
    <table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Photo</th>
                <th scope="row">Owner</th>
                <th scope="row">Category</th>
                <th scope="row">Title</th>
                <th scope="row">Body</th>
                <th scope="row">Post link</th>
                <th scope="row">Comments</th>
                <th scope="row">Created at</th>
                <th scope="row">Update</th>
            </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td>

                    <img height="62" src="{{$post->photo ? asset($post->photo->file) : 'http://placehold.it/62x62'}}"
                         alt="">

                </td>
                <td>{{$post->user->name}}</td>
                <td>
                    {{$post->category ? $post->category_name : 'Uncategorized'}}
                </td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <a href="{{route('posts.edit',$post->id)}}">Post Link</a>
                </td>
                <td>Comments</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

@endsection
