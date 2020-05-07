@extends('layouts.admin')
@section('title')
    All Categories
@endsection
@section('content')
    <div class="col-12">
        <h1>All Categories</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success rounded-pill mb-2" href="{{route('categories.create')}}">New Category</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Category</th>
            <th scope="row">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if($categories)
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>
                        <a href="{{route('categories.edit', $category->id)}}"> {{$category->name}}</a>
                    </td>
                    <td>
                        @if($category->deleted_at == null)
                            <a class="btn btn-outline-warning rounded-pill w-100 mb-1" style="max-width: 125px" href="{{route('categories.edit',$category->id)}}">Edit</a>
                        @endif
                        @if($category->deleted_at != null)
                            <a class="btn btn-outline-danger rounded-pill mb-1 w-100" style="max-width: 125px" href="{{route('admin.categoryrestore',$category->id)}}">Not Active</a>
                        @else
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}
                            <div class="form-group">
                            {!! Form::submit('Active',['class'=>'btn btn-outline-success rounded-pill w-100 mb-1', 'style' => "max-width: 125px"]) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
