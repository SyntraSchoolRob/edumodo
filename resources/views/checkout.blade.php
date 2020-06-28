@extends('layouts.base')
@section('title')Edumodo - Checkout @endsection
@section('description')Checkout: Simple payments for your orders. @endsection
@section('author')Robbe @endsection
@section('keywords')education, innovation, software, security, shop, checkout, buy, products, licenses @endsection
@section('body')
    <body itemscope itemtype="https://schema.org/WebPage" class="bg-Beige">
    <header class="p-0">
        <div class="maxWidth mx-auto">
            @include('includes.navbar')
        </div>
    </header>
    <section class="container-fluid p-0" itemscope itemtype="https://schema.org/CheckoutPage">
        <h1 class="cBeige montserratB font-s-24 fs-39 d-flex justify-content-center pt-5 pb-5" itemprop="headline">Checkout</h1>
        <form action="{{ route('pay') }}" method="get" >
            @csrf
            <div class="row rounded shadow-sm mb-5 maxWidth1150 mx-auto p-md-4 bg-white">
                <div class="col-12 col-md-6 p-4">
                    <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold"><i class="fas fa-file-alt pr-3"></i>Billing details</p>
                    <p class="font-italic mb-4 pl-sm-4">We'll never share your details with anyone else!</p>
                    <div class="pl-sm-4">
                        <div class="d-sm-flex">
                            <div class="form-group">
                                <label for="first_name" class="pl-2">First name</label>
                                <input type="text" class="form-control rounded-pill" id="first_name" required name="first_name"
                                       @if(Auth::user() ) value="{{ Auth::user()->first_name }}" @endif >
                            </div>
                            <div class="form-group pl-sm-3">
                                <label for="lastName" class="pl-2">Last name</label>
                                <input type="text" class="form-control rounded-pill d-block" required id="lastName"
                                       @if(Auth::user() ) value="{{ Auth::user()->last_name }}" @endif >
                            </div>
                        </div>
                        <div class="d-sm-flex">
                            <div class="form-group">
                                <label for="company" class="pl-2">Company(optional)</label>
                                <input type="text" class="form-control rounded-pill" id="company" name="company" placeholder="ex. Harvard University">
                            </div>
                            <div class="form-group pl-sm-3">
                                <label for="vat" class="pl-2">VAT-number(optional)</label>
                                <input type="number" class="form-control rounded-pill d-block" id="vat" min="0" max="1010101010101010101010101010" step="1" placeholder="ex 140.450.450.450">
                            </div>
                        </div>
                        <div class="form-group mt-2 pr-md-5 pb-2">
                            <label for="emailUser" class="pl-2">Email-address</label>
                            <input type="email" class="form-control rounded-pill" required id="emailUser" placeholder="you@example.com"
                                   @if(Auth::user() ) value="{{ Auth::user()->email }}" @endif >
                        </div>
                        <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold"><i class="fas fa-map-marked-alt pr-3"></i>Delivery address</p>
                        <div class="form-group pr-md-5">
                            <label for="inputAddress" class="pl-2">Address</label>
                            <input type="text" class="form-control rounded-pill" required id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-row pr-sm-5">
                            <div class="form-group col-md-6">
                                <label for="inputCity" class="pl-2">City</label>
                                <input type="text" required class="form-control rounded-pill" id="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState" class="pl-2">State</label>
                                <select id="inputState" required class="form-control rounded-pill">
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="California">California</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Texas">Texas</option>
                                    <option value="State New York">State New York</option>
                                    <option value="Washington">State Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row pr-sm-5">
                            <div class="form-group col-md-5">
                                <label for="inputZip" class="pl-2">Zip</label>
                                <input type="number" required class="form-control required rounded-pill" id="inputZip">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="country" class="pl-2">Country</label>
                                <select id="country" class="form-control rounded-pill" required>
                                    <option disabled selected value="">Choose...</option>

                                    <option value="US">United States</option>
                                    <option value="MX">Mexico</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold"><i class="fas fa-truck pr-3"></i>Delivery method</p>
                    <p class="font-italic mb-4 pl-sm-4">Choose you're delivery method. You can choose to get your license code directly through email or we can send it through the post</p>
                    <div class="pl-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" required type="radio" value="email" id="checkboxEmail" name="radioDelivery">
                            <label class="form-check-label" for="checkboxEmail">Send me my licence code through email</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="option2" id="checkboxPost"  name="radioDelivery">
                            <label class="form-check-label" for="checkboxPost">Send me my licence code through the post</label>
                        </div>
                    </div>
                    <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold mt-5"><i class="fas fa-money-check-alt pr-3"></i>Payment options</p>
                    <p class="font-italic mb-2 pl-sm-4">Accepted payment options</p>
                    <p class=" pl-sm-4"><i class="fas fa-lock pr-2"></i>Credit card/ Mastercard/ visa/ American express/ Discover</p>
                    <div class="pl-sm-4 pr-md-5">
                        <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                    </div>
                    <div class="pl-sm-4 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" required type="checkbox" value="" id="terms">
                            <label class="form-check-label" for="terms">I have read and agree to the websites <span class="underline">terms and conditions</span> and our <span class="underline"> privacy policy</span></label>
                        </div>
                    </div>
                    @if((Session::get('cart')->totalQuantity) != 0)
                        <button class="btn btn-dark rounded-pill py-2 btn-block mt-3" type="submit">Fulfill your order  <i class="fas fa-money-check pl-2"></i></button>
                    @else
                        <a href="{{route('shop')}}" class="btn btn-dark rounded-pill py-2 btn-block mt-3 text-white" >Go shopping first  <i class="fas fa-money-check pl-2"></i></a>
                    @endif
                </div>
            </div>
        </form>
    </section>
    @include('includes.footer')
    <script src="{{asset('js/front_end-app.js')}}"></script>
    </body>
    </html>
@endsection
