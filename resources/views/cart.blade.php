@extends('layouts.base')
@section('title')Edumodo - Cart @endsection
@section('description')Edumodo - Cart: View your cart. @endsection
@section('author')Robbe @endsection
@section('keywords')education, innovation, software, top, best, cart, buy, products, licenses @endsection
@section('body')
    <body itemscope itemtype="https://schema.org/WebPage" class="bg-Beige">
    <header class="p-0">
        <div class="maxWidth mx-auto">
            @include('includes.navbar')
        </div>
    </header>
    <section class=" pb-5">
        <h1 class="cBeige montserratB font-s-24 fs-39 d-flex justify-content-center pt-5 pb-5">Shoppingcart</h1>
        <div class="container-fluid rounded shadow-sm mb-5 maxWidth1150 mx-auto p-md-4 bg-white">

            @if(Session::has('cart'))

                @foreach($cart as $item)

                <div class="row border-bottom pt-2">
                    <div class="col-5 col-sm-3 col-md-2">
                        <img src="{{$item['product_image'] ? asset($item['product_image']) : asset('images/website/shopImg.png') }}" alt="product" class="img-fluid rounded">
                    </div>
                    <div class="col-7 col-sm-3 col-md-6 p-md-3 d-flex align-items-center">
                        <div>
                            <p class="d-flex align-items-center">{{$item['product_name']}}</p>
                            <p class="font-italic d-flex align-content-center">Description - {{Str::limit($item['product_description'], 125, '...') }}</p>
                        </div>
                    </div>

                        <form class="col-6 col-sm-4 col-md-3 p-lg-4 pt-3 pt-sm-0" method="POST" action="{{action('MenuController@updateQuantity')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            @if($item['quantity'] <= 4)
                            <div class="form-group d-flex mb-0">
                                <label for="amount"><small>Amount:</small></label>
                                <select class="form-control ml-2" id="amount" name="amount" style="width: 60px">
                                    @for ($x = 1; $x <= 5 ; $x++)
                                        <option value="{{$x}}" @if( $item['quantity'] == $x) selected @endif> {{$x}} </option>
                                    @endfor
                                </select>
                            </div>
                            @else
                                <small>Amount: {{$item['quantity']}}</small>
                            @endif
                           <br>
                            <small class="c5a9">Product price: <span>${{$item['product_price']}}</span></small><br>
                            <a href="{{route('removeItem', $item['product_id'])}}"><i class="fas fa-trash-alt pt-2 pl-2"></i></a>
                        </form>
                        <div class="col-6 col-sm-2 col-md-1 d-flex align-items-center ">
                            <p class="font-weight-bold ">{{$item['product_price']}}</p>
                        </div>
                </div>
                @endforeach

                    <div class="row border-bottom pt-2">
                        <div class="col d-flex justify-content-end">
                            <p class="font-italic"><i class="fas fa-shopping-cart"></i>Total of <span>{{Session::has('cart') ? Session::get('cart')->totalQuantity : '0'}}</span> products</p>
                        </div>
                    </div>
            @else
            <div class="row border-bottom pt-2">
                <div class="col-5 col-sm-3 col-md-2">
                    <img src="{{asset('images/website/shopImg.png')}}" alt="product" class="img-fluid">
                </div>
                <div class="col-7 col-sm-3 col-md-6 p-md-3 d-flex align-items-center">
                    <div>
                        <p class="d-flex align-items-center">You're cart is empty</p>
                        <p class="font-italic d-flex align-content-center">Go to shop to discover our products.</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 p-lg-4 pt-3 pt-sm-0">
                </div>
                <div class="col-6 col-sm-2 col-md-1 d-flex align-items-center">
                    <a href="{{route('shop')}}" class="hcBeige c5a9"><p class="font-weight-bold ">Shop >></p></a>
                </div>
            </div>
            @endif


        </div>
    </section>
    <div class="container-fluid mb-5 p-0">
        <div class="row row p-2 pt-4 pt-md-0 p-md-4 bg-white rounded shadow maxWidth1150 mx-auto">
            <div class="col-12 col-md-6 p-md-4">
                <p class="bg-light rounded-pill pl-4 p-3 text-uppercase font-weight-bold">Coupon code</p>
                <div >
                    <form class="pt-2 px-4 pb-4">
                        <label for="couponCode" class="font-italic mb-4">If you have a coupon code, you can enter your code here</label>
                        <div class="d-lg-flex">
                            <input type="text" class="form-control rounded-pill py-2 mr-3" placeholder="Apply coupon" id="couponCode">
                            <button type="button" class="btn btn-dark rounded-pill py-2 btn-block mt-3 mt-lg-0"><i class="fas fa-gift pr-2"></i>Apply coupon</button>
                        </div>
                    </form>
                </div>
                <p class="bg-light rounded-pill pl-4 p-3 text-uppercase font-weight-bold">Add information</p>
                <form class="pt-2 px-4 pb-4">
                    <div class="form-group">
                        <label for="addInformation" class="font-italic mb-2">If you have any additional information we should know about your order then you can leave it in the box below.</label>
                        <textarea name="t" cols="30" rows="2" class="form-control" id="addInformation"></textarea>
                    </div>
                </form>
                <img src="{{asset('images/website/smile.png')}}" alt="smile" width="115" height="195" class=" d-md-block" id="imageCart">
            </div>
            <div class="col-12 col-md-6 p-md-4">
                <p class="bg-light rounded-pill pl-4 p-3 text-uppercase font-weight-bold">Order summary</p>
                <div class="pt-2 px-4 pb-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on your location and residency</p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal</strong><strong>$849.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipment</strong><strong>$0.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong><strong class="font-s-24">$849.99 </strong></li>
                        <li class="pt-4"><a href="{{route('checkout')}}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout <i class="fas fa-arrow-right pl-2"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('contact')}}"><img src="{{asset('images/website/contactSup.png')}}" alt="support" class="d-none d-md-block d-md-flex justify-content-md-end mr-2 support"></a>
    @include('includes.footer')
    <script src="{{asset('js/front_end-app.js')}}"></script>
    </body>
    </html>
@endsection
