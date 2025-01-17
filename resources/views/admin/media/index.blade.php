@extends('layouts.admin')
@section('title')
    All Media
@endsection
@section('content')
   <div class="col-12">
       <h1><i class="fas fa-camera-retro pr-2"></i>All Media</h1>
   </div>
    <div class="col-12">
        <a class="btn btn-success rounded-pill mb-2" href="{{route('media.create')}}">Upload new photo</a>
    </div>
   <div class="col-12">
       <table class="table">
           <thead>
           <tr>
               <th scope="row">Id</th>
               <th scope="row">Media</th>
               <th scope="row">Created</th>
               <th scope="row">Delete</th>
           </tr>
           </thead>
           <tbody>
           @if($photos)
               @foreach($photos as $photo)
                   <tr>
                       <td>{{$photo->id}}</td>
                       <td>
                           <img height="100" src="{{$photo->file ? asset($photo->file) :'http:/placehold.it/62x62'}}" alt="">
                       </td>
                       <td>
                           {{$photo->created_at}}
                       </td>
                       <td>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
                               <div class="form-group">
                                   {!! Form::submit('Soft-Delete file',['class'=>'btn btn-danger rounded-pill w-100 mb-1', 'style' => "max-width: 125px"]) !!}
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
