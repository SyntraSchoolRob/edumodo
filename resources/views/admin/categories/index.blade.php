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
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
