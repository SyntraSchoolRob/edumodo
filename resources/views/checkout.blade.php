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
        <div class="row rounded shadow-sm mb-5 maxWidth1150 mx-auto p-md-4 bg-white">
            <div class="col-12 col-md-6 p-4">
                <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold"><i class="fas fa-file-alt pr-3"></i>Billing details</p>
                <p class="font-italic mb-4 pl-sm-4">We'll never share your details with anyone else!</p>
                <form class="pl-sm-4">
                    <div class="d-sm-flex">
                        <div class="form-group">
                            <label for="firstName" class="pl-2">First name</label>
                            <input type="text" class="form-control rounded-pill" id="firstName">
                        </div>
                        <div class="form-group pl-sm-3">
                            <label for="lastName" class="pl-2">Last name</label>
                            <input type="text" class="form-control rounded-pill d-block" id="lastName">
                        </div>
                    </div>
                    <div class="d-sm-flex">
                        <div class="form-group">
                            <label for="companyName" class="pl-2">Company(optional)</label>
                            <input type="text" class="form-control rounded-pill" id="companyName">
                        </div>
                        <div class="form-group pl-sm-3">
                            <label for="vatNumber" class="pl-2">VAT-number(optional)</label>
                            <input type="number" class="form-control rounded-pill d-block" id="vatNumber">
                        </div>
                    </div>
                    <div class="form-group mt-2 pr-md-5 pb-2">
                        <label for="emailUser" class="pl-2">Email-address</label>
                        <input type="email" class="form-control rounded-pill" id="emailUser" placeholder="you@example.com">
                    </div>
                    <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold"><i class="fas fa-map-marked-alt pr-3"></i>Delivery address</p>
                    <div class="form-group pr-md-5">
                        <label for="inputAddress" class="pl-2">Address</label>
                        <input type="text" class="form-control rounded-pill" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-row pr-sm-5">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="pl-2">City</label>
                            <input type="text" class="form-control rounded-pill" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="pl-2">State</label>
                            <select id="inputState" class="form-control rounded-pill">
                                <option selected>Choose...</option>
                                <option>California</option>
                                <option>Florida</option>
                                <option>State New York</option>
                                <option>State Washington</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row pr-sm-5">
                        <div class="form-group col-md-5">
                            <label for="inputZip" class="pl-2">Zip</label>
                            <input type="text" class="form-control rounded-pill" id="inputZip">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="country" class="pl-2">Country</label>
                            <select id="country" class="form-control rounded-pill">
                                <option selected>Choose...</option>
                                <option>United States</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-6 p-4">
                <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold"><i class="fas fa-truck pr-3"></i>Delivery method</p>
                <p class="font-italic mb-4 pl-sm-4">Choose you're delivery method. You can choose to get your license code directly through email or we can send it through the post</p>
                <form class="pl-sm-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="option1" id="checkboxEmail" name="radioDelivery">
                        <label class="form-check-label" for="checkboxEmail">Send me my licensce code through email</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="option2" id="checkboxPost"  name="radioDelivery">
                        <label class="form-check-label" for="checkboxPost">Send me my licensce code through the post</label>
                    </div>
                </form>
                <p class="bg-light rounded-pill pl-4 p-2 text-uppercase font-weight-bold mt-5"><i class="fas fa-money-check-alt pr-3"></i>Payment options</p>
                <p class="font-italic mb-2 pl-sm-4">Choose you're preferred payment option</p>
                <p class="mb-4 pl-sm-4"><i class="fas fa-lock pr-2"></i>Credit / debit card</p>
                <form class="pl-sm-4 pr-md-5">
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="cardNumber" class="pl-2">Card number</label>
                            <input type="number" class="form-control rounded-pill" id="cardNumber" placeholder="Enter card number">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-4">
                            <label for="cardDate" class="pl-2">Expiration date</label>
                            <input type="text" class="form-control rounded-pill" id="cardDate" placeholder="MM / YY">
                        </div>
                        <div class="form-group col-12 col-md-8">
                            <label for="secCode" class="pl-2">Security code (CVV)</label>
                            <input type="number" class="form-control rounded-pill" id="secCode" placeholder="XXX">
                        </div>
                    </div>
                </form>
                <form class="pl-sm-4 mt-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="terms">
                        <label class="form-check-label" for="terms">I have read and agree to the websites <span class="underline">terms and conditions</span> and our <span class="underline"> privacy policy</span></label>
                    </div>
                </form>
                <a href="" class="btn btn-dark rounded-pill py-2 btn-block mt-3">Fulfill your order <i class="fas fa-check pl-2"></i></a>
            </div>
        </div>
    </section>
    @include('includes.footer')
    </body>
    </html>
@endsection
