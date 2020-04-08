@extends('layouts.admin')
@section('title')
    All Roles
@endsection
@section('content')
    <div class="col-12">
        @if(Session::has('deleted_role'))
            <p class="alert alert-success">{{session('deleted_role')}}</p>
        @elseif(Session::has('created_role'))
            <p class="alert alert-success">{{session('created_role')}}</p>
        @elseif(Session::has('updated_role'))
            <p class="alert alert-success">{{session('updated_role')}}</p>
        @elseif(Session::has('softdeleted_role'))
            <p class="alert alert-success">{{session('softdeleted_role')}}</p>
        @endif
    </div>
    <div class="col-12">
        <h1>All Roles</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success rounded-0" href="{{route('roles.create')}}">New Role</a>

    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Role</th>
            <th scope="row">Actions</th>

        </tr>
        </thead>
        <tbody>
        @if($roles)
            @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>

                    <td>
                        <a href="{{route('roles.edit', $role->id)}}"> {{$role->name}}</a>

                    </td>
                    <td>
                        <a class="btn btn-outline-warning rounded-pill mb-1" href="{{route('roles.edit',
                            $role->id)}}">Edit</a>
                        @if($role->deleted_at != null)
                            <a class="btn btn-outline-success rounded-pill mb-1" href="{{route('admin.rolerestore',
                            $role->id)}}">Not Active</a>
                        @else
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRolesController@destroy', $role->id]])
                       !!}
                            <div class="form-group">
                                {!! Form::submit('Active',['class'=>'btn btn-outline-danger rounded-pill mb-1'])
                                 !!}
                            </div>
                            {!! Form::close() !!}
                        @endif

                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{ $roles->links() }}
@endsection
