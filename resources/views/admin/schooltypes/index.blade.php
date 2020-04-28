@extends('layouts.admin')
@section('title')
    All Categories
@endsection
@section('content')
    <div class="col-12">
        <h1>All Schooltypes</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success rounded-pill mb-2" href="{{route('schooltypes.create')}}">New Schooltype</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Schooltype</th>

        </tr>
        </thead>
        <tbody>
        @if($schooltypes)
            @foreach($schooltypes as $schooltype)
                <tr>
                    <td>{{$schooltype->id}}</td>
                    <td>
                        <a href="{{route('schooltypes.edit', $schooltype->id)}}"> {{$schooltype->type}}</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{ $schooltypes->links() }}
@endsection
