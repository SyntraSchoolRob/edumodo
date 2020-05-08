@extends('layouts.base')
@section('title')Edumodo - Contact @endsection
@section('description')Contact edumodo - If you have any questions, do not hesitate to contact edumodo. We are always ready to help you. @endsection
@section('author')Robbe @endsection
@section('keywords')education, innovation, software, contact, questions, help, support, get, email, phone, skype @endsection
@section('body')
<body class="bg-Beige" itemscope itemtype="https://schema.org/WebPage">
    <header class="p-0">
        <div class="maxWidth mx-auto">
            @include('includes.navbar')
        </div>
    </header>
    <div class="container-fluid maxWidth1150 mx-auto mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bgOragne rounded-pill p-2 pl-4">
                        <li class="breadcrumb-item font-italic"><a href="{{route('index')}}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item active font-italic" aria-current="page">contact</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-md-4">
            </div>
        </div>
    </div>
    <section class="container-fluid p-0 mt-md-83">
        <div class="row maxWidth1150 mx-auto ">
            <div class="col-12 col-md-6 d-flex align-items-end">
                <img src="{{asset('images/website/contact1.png')}}" alt="girl reading a book" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <div class="row row p-2  p-md-4 bg-white rounded shadow maxWidth1150 mx-auto">
                    <div class="col-12 p-md-2 pr-md-5">
                        {{--<div class="alert alert-success rounded-pill" role="alert">
                            Your message has been submitted
                        </div>--}}
                        {!! Form::open(['method'=>'POST', 'action'=>'MenuController@contactform', 'files'=>false]) !!}
                        <h1 class="montserratB pt-4 pt-lg-0">Contact us</h1>
                        <div class="d-sm-flex">
                            <div class="form-group">
                                {!! Form::label('first_name', 'First name:') !!}
                                {!! Form::text('first_name', null, ['class'=>'form-control rounded-pill', "required", 'placeholder'=>'Johnny']) !!}
                            </div>
                            <div class="form-group pl-sm-3">
                                {!! Form::label('last_name', 'Last name:') !!}
                                {!! Form::text('last_name', null, ['class'=>'form-control rounded-pill d-block', "required", 'placeholder'=>'Depp']) !!}
                            </div>
                        </div>
                        <div class="form-group mt-2 pb-2">
                            {!! Form::label('email', 'Email-address') !!}
                            {!! Form::email('email', null, ['class'=>'form-control rounded-pill', "required", 'placeholder'=>'you@example.com']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('subject', 'Subject') !!}
                            {!! Form::text('subject', null, ['class'=>'form-control rounded-pill', "required", 'placeholder'=>'Your subject']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Leave your message here') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control', "required", 'placeholder'=>'Your message', 'cols'=>"30", 'rows'=>"4"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Send message', ['class'=>'btn btn-dark rounded-pill py-2 btn-block mb-5 mb-lg-0']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')
    <script src="{{asset('js/front_end-app.js')}}"></script>
</body>
</html>
@endsection
