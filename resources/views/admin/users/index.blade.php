@extends('layouts.admin')
@section('title')
    onze users
@endsection
@section('content')
    <div class="col-12">
        @if(Session::has('deleted_user'))
            <p class="alert alert-success">{{session('deleted_user')}}</p>
        @endif
    </div>
    <div class="col-12">
        <h1>All users</h1>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Role</th>
                <th scope="col">Active</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>

                            <img height="62" src="{{$user->photo ? asset($user->photo->file) :'http:/placehold.it/62x62'}}" alt="" class="rounded-circle">
                        </td>
                        <td>
                            <a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a>

                        </td>
                        <td>{{$user->email}}</td>
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge badge-pill badge-info">{{$role->name}}</span>
                            @endforeach
                        </td>
                        <td>
                            @if($user->deleted_at == null)
                                <p class="badge badge-success">Active</p>
                            @else
                                <p class="badge badge-danger">Not active</p>
                            @endif
                        </td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            <a class="btn btn-outline-warning rounded-pill w-100 mb-1" href="{{route('users.edit',
                            $user->id)}}">Edit</a>
                            @if($user->deleted_at != null)
                                <a class="btn btn-outline-danger rounded-pill mb-1 w-100" href="{{route('admin.userrestore',
                            $user->id)}}">Not Active</a>
                            @else
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]])
                             !!}
                            <div class="form-group">
                                {!! Form::submit('Active',['class'=>'btn btn-outline-success rounded-pill w-100 mb-1'])
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
        {{ $users->links() }}
    </div>


@endsection
