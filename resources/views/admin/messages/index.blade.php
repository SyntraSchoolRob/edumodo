@extends('layouts.admin')
@section('title')
    All messages
@endsection
@section('content')
    <div class="col-12">
        <h1><i class="fas fa-envelope pr-2"></i>Contact - Messages</h1>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Name</th>
                <th scope="row">E-mail</th>
                <th scope="row">Subject</th>
                <th scope="row">Time</th>
                <th scope="row">View</th>
            </tr>
            </thead>
            <tbody>
            @if($contacts)
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->first_name,  $contact->last_name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td>view</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
