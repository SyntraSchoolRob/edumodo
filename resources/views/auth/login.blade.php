@extends('layouts.base')
@section('title')Edumodo - Account @endsection
@section('description')Account -Login- or sign-up to your personal edumodo account @endsection
@section('author')Robbe @endsection
@section('keywords')education, account, login, sign-up, join, community, innovation, software, solutions @endsection
@section('body')
    <body class="bg-Beige" itemscope itemtype="https://schema.org/WebPage">
    <header class="p-0">
        <div class="maxWidth mx-auto">
            @include('includes.navbar')
        </div>
    </header>
    <section class=" pb-5">
        <h1 class="cBeige montserratB font-s-24 fs-39 d-flex justify-content-center pt-5 pb-5">Edumodo community</h1>
        <div class="row p-2 pt-4 pt-md-0 p-md-4 bg-white rounded shadow maxWidth1150 mx-auto">
            <div class="col-12 col-md-6 p-2">
                <p class="bg-light rounded-pill pl-4 p-3 text-uppercase font-weight-bold"><i class="fas fa-user pr-2"></i>Sign In</p>
                <form class="pt-2 pb-4 pr-md-5 px-4" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group pr-md-5 mt-2 pb-2">
                        <label for="singinEmail" class="pl-2"><i class="fas fa-envelope pr-2"></i>Email-address</label>
                        <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="singinEmail" placeholder="you@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group pr-md-5">
                        <label for="signinPass" class="pl-2"><i class="fas fa-lock pr-2"></i>Password</label>
                        <input type="password" class="form-control rounded-pill d-block @error('password') is-invalid @enderror" id="signinPass" placeholder="Password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="signinKeep" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label checked" for="signinKeep">{{ __('Keep me signed in') }}</label>
                    </div>
                    <div class="form-group pr-md-5">
                        <button class="btn btn-dark rounded-pill py-2 btn-block mt-4">{{ __('Login') }} <i class="fas fa-sign-in-alt pl-2"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 p-2">
                <p class="bg-light rounded-pill pl-4 p-3 text-uppercase font-weight-bold"><i class="fas fa-users pr-2"></i>Join the family</p>
                <div class="pt-2 px-4 pb-4">
                    <p class="font-italic mb-4">Register here and discover why millions of people are already using the software of Edumodo to get the best results.</p>
                    <form class="pt-2 pb-4 pr-md-5">
                        <div class="d-sm-flex">
                            <div class="form-group">
                                <label for="regFirstN" class="pl-2"><i class="fas fa-address-card pr-2"></i>First name</label>
                                <input type="text" class="form-control rounded-pill" id="regFirstN" placeholder="Name">
                            </div>
                            <div class="form-group pl-sm-3">
                                <label for="regLastN" class="pl-2">Last name</label>
                                <input type="text" class="form-control rounded-pill d-block" id="regLastN" placeholder="xxx">
                            </div>
                        </div>
                        <div class="form-group pr-md-5 mt-2 pb-2">
                            <label for="regEM" class="pl-2"><i class="fas fa-envelope pr-2"></i>Email-address</label>
                            <input type="email" class="form-control rounded-pill" id="regEM" placeholder="you@example.com">
                        </div>
                        <div class="form-group pr-md-5">
                            <label for="regP" class="pl-2"><i class="fas fa-lock pr-2"></i>Password</label>
                            <input type="password" class="form-control rounded-pill d-block" id="regP" placeholder="Must be at least 9 characters">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="terms">
                            <label class="form-check-label" for="terms">I have read and agree to the websites <span class="underline">terms and conditions</span> and our <span class="underline"> privacy policy</span></label>
                        </div>
                        <div class="pr-md-5">
                            <button class="btn btn-dark rounded-pill py-2 btn-block mt-4">Register <i class="fas fa-file-alt pl-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <a href="{{route('contact')}}"><img src="{{asset('images/website/contactSup.png')}}" alt="support" class="d-none d-md-block d-md-flex justify-content-md-end mr-2 support"></a>
    @include('includes.footer')
    </body>
    </html>
@endsection

