@extends('layouts.admin')
@section('title')
    All Addresses
@endsection
@section('content')
    <div class="col-12">
        <h1><i class="fas fa-address-card pr-2"></i> All User Addresses</h1>
    </div>
    <div class="col-12">
        <a class="btn btn-success rounded-pill mb-2" href="{{route('addresses.create')}}">New Address</a>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">User_id</th>
            <th scope="row">Street</th>
            <th scope="row">City</th>
            <th scope="row">State</th>
            <th scope="row">Zip</th>
            <th scope="row">Country</th>
            <th scope="row">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if($addresses)
            @foreach($addresses as $address)
                <tr>
                    <td>{{$address->id}}</td>
                    <td>{{$address->id}}</td>
                    <td>{{$address->street}}</td>
                    <td>{{$address->city}}</td>
                    <td>{{$address->state}}</td>
                    <td>{{$address->zip}}</td>
                    <td class="text-danger">
                        
                    </td>
                    <td>
                        @if($address->deleted_at == null)
                            <a class="btn btn-outline-warning rounded-pill w-100 mb-1" style="max-width: 125px" href="{{route('addresses.edit',$address->id)}}">Edit</a>
                        @endif
                        @if($address->deleted_at != null)
                            <a class="btn btn-outline-danger rounded-pill mb-1 w-100" style="max-width: 125px" href="{{route('admin.addressrestore',$address->id)}}">Not Active</a>
                        @else
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminAddressesController@destroy', $address->id]]) !!}
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
@endsection
