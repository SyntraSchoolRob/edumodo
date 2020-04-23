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
                        <form method="post">
                            <h1 class="montserratB pt-4 pt-lg-0">Contact us</h1>
                            <div class="d-sm-flex">
                                <div class="form-group">
                                    <label for="contactFN" class="pl-2">First name</label>
                                    <input type="text" class="form-control rounded-pill" id="contactFN" placeholder="Johnny">
                                </div>
                                <div class="form-group pl-sm-3">
                                    <label for="contactLN" class="pl-2">Last name</label>
                                    <input type="text" class="form-control rounded-pill d-block" id="contactLN" placeholder="Depp">
                                </div>
                            </div>
                            <div class="form-group mt-2 pb-2">
                                <label for="contactEmail" class="pl-2">Email-address</label>
                                <input type="email" class="form-control rounded-pill" id="contactEmail" placeholder="you@example.com">
                            </div>
                            <div class="form-group">
                                <label for="contactSubj" class="pl-2">Subject</label>
                                <input type="text" class="form-control rounded-pill" id="contactSubj" placeholder="Save us ;)">
                            </div>
                            <div class="form-group">
                                <label for="contactTextArea" class="font-italic mb-2">Leave your message here</label>
                                <textarea name="t" cols="30" rows="2" class="form-control" id="contactTextArea"></textarea>
                            </div>
                            <button class="btn btn-dark rounded-pill py-2 btn-block mb-5 mb-lg-0">Send <i class="fas fa-arrow-right pl-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')

</body>
</html>
@endsection
