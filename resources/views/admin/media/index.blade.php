@extends('layouts.admin')
@section('title')
    All Media
@endsection
@section('content')
   <div class="col-12">
       <h1>All Media</h1>
   </div>
    <div class="col-12">
        <a class="btn btn-success rounded-0" href="{{route('media.create')}}">New Media</a>

    </div>
   <div class="col-12">
       <table class="table table-striped">
           <thead>
           <tr>
               <th scope="row">Id</th>
               <th scope="row">Media</th>

           </tr>
           </thead>
           <tbody>
           @if($photos)
               @foreach($photos as $photo)
                   <tr>
                       <td>{{$photo->id}}</td>
                       <td>
                           <img height="62" src="{{$photo->file ? asset($photo->file) :
                            'http:/placehold
                            .it/62x62'}}" alt=""></td>
                       <td>
                           <a class="btn btn-warning rounded-0" href="{{route('media.edit', $photo->id)}}">Edit</a>
                       </td>

                       <td>
                           {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id] ])
                            !!}
                           <div class="form-group">
                               {!! Form::submit('Delete media', ['class' => 'btn btn-danger rounded-0']) !!}
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
