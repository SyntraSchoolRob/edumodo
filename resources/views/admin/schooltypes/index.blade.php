@extends('layouts.admin')
@section('title')
    All Categories
@endsection
@section('content')
    <div class="col-12">
        <h1><i class="fas fa-graduation-cap pr-2"></i>All Schooltypes</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success rounded-pill mb-2" href="{{route('schooltypes.create')}}">New Schooltype</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Schooltype</th>
            <th scope="row">Actions</th>
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
                    <td>
                        @if($schooltype->deleted_at == null)
                            <a class="btn btn-outline-warning rounded-pill w-100 mb-1" style="max-width: 125px" href="{{route('schooltypes.edit',$schooltype->id)}}">Edit</a>
                        @endif
                        @if($schooltype->deleted_at != null)
                            <a class="btn btn-outline-danger rounded-pill mb-1 w-100" style="max-width: 125px" href="{{route('admin.schooltyperestore',$schooltype->id)}}">Not Active</a>
                        @else
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminSchoolTypesController@destroy', $schooltype->id]]) !!}
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
    {{ $schooltypes->links() }}
@endsection
