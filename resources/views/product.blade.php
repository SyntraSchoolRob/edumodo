@extends('layouts.base')
@section('title')Edumodo - Product @endsection
@section('description')Edumodo: a detail product webpage. @endsection
@section('author')Robbe @endsection
@section('keywords')education, innovation, software, smartschool, product, technology, buy, shop, university @endsection
@section('body')
    <body itemscope itemtype="https://schema.org/WebPage">
    <header class="p-0">
        <div class="maxWidth mx-auto">
            @include('includes.navbar')
        </div>
    </header>
    <section class="container-fluid maxWidth1150 mx-auto" itemscope itemtype="https://schema.org/Product">
        <div class="row pb-5 ">
            <div class="col-12 col-md-6 ">
                <img src="{{$product->photo ? asset($product->photo->file) : asset('images/website/shopImg.png') }}" class="d-block w-100 rounded mt-4" alt="product" itemprop="img">
            </div>
            <div class="col col-md-6 p-5 ">
                <p class="pt-md-5 font-s-24 c9fb">${{$product->price}} USD /Billed Anually</p>
                <h1 itemprop="name" class="workSansB cf36">{{$product->title}}</h1>
                <div class="stars">
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p itemprop="category" class="mb-0">Category: {{$product->category ? $product->category->name : 'not categorized'}}</p>
                <p class="mt-0">Schooltype: {{$product->schooltype ? $product->schooltype->type : 'no type'}}</p>
                <p>{{$product->description}}</p>
                <form method="POST" action="{{action('MenuController@updateQuantity')}}"
                      enctype="multipart/form-data" name="postForm{{$item['product_id']}}" >
                    @csrf
                    @method('POST')

                    <div class="form-group width125 pb-2">
                        <label for="productAmount"></label>
                        <select class="form-control" id="productAmount">
                            <option selected disabled>Quantity</option>

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                    </div>
                </form>
                    <a href="{{route('addToCart', $product->id)}}" class="btn btn-info text-white rounded-pill pt-2 pl-3 pb-2 pr-3">Add to cart <i class="fas fa-shopping-basket pl-2"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-end">
                    <img src="{{asset('images/website/CESCompressed.png')}}" alt="award CES" class="d-sm-none" width="150" height="141" id="cesMobile">
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{asset('images/website/CESCompressed.png')}}" alt="award CES" class="d-none d-sm-block d-md-none cesSMLG" width="200" height="188" style="">
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{asset('images/website/CESCompressed.png')}}" alt="award CES" class="d-none d-md-block d-lg-none" width="150" height="141" id="cesMD" style="margin-top: -175px">
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{asset('images/website/CESCompressed.png')}}" alt="award CES" class="d-none d-lg-block d-xl-none cesSMLG" width="200" height="188">
                </div>
                <div class="d-flex justify-content-end">
                    <img src="{{asset('images/website/CESCompressed.png')}}" alt="award CES" class="d-none d-xl-block" width="250" height="233" id="cesXL">
                </div>
                <p class="d-flex justify-content-end"><i class="fas fa-crown pr-2 cBeige"></i>Award winner! This software package has won the award for the best educational software by CES 2020!</p>
            </div>
        </div>
        <div class="row border-top-yellow">
            <div class="col-12 col-md-6">
                <h2 class="bg-light rounded-pill fs18 mt-5 p-2 bgf9 pl-5"><i class="fas fa-comment pr-2"></i>Description</h2>
                <p class="p-2">{{$product->description}}</p>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="bg-light rounded-pill fs18 p-2 mt-md-5 bgf9 pl-5"><i class="fas fa-truck pr-2"></i>Delivery</h2>
                <p class="p-2">The software gets delivered by email and is immediately available.</p>
                <h2 class="bg-light rounded-pill fs18 mt-2 p-2 bgf9 pl-5"><i class="fas fa-life-ring pr-2"></i>Support</h2>
                <p class="p-2">To get support contact <a href="mailto:info@edumodo.com" class="c5a9 hcBeige underline">info@edumodo.com</a></p>
            </div>
        </div>
        <h3 class="bg-light rounded-pill fs18 mt-md-5 p-2 bgf9 pl-5"><i class="fas fa-th-large pr-2"></i>Other categories</h3>
        <a href="{{route('shop')}}"><div class="row">
                <div class="col-6 col-sm-4 p-2">
                    <img src="{{asset('images/website/engineering.png')}}" alt="engineering" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 p-2">
                    <img src="{{asset('images/website/accounting.png')}}" alt="accounting" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 p-2">
                    <img src="{{asset('images/website/creative.png')}}" alt="creative" class="img-fluid">
                </div>
                <div class="col-6 col-sm-4 p-2">
                    <img src="{{asset('images/website/design.png')}}" alt="design" class=" img-fluid">
                </div>
                <div class="col-6 col-sm-4 p-2">
                    <img src="{{asset('images/website/physics.png')}}" alt="physics" class=" img-fluid">
                </div>
                <div class="col-6 col-sm-4 p-2">
                    <img src="{{asset('images/website/chemistry.png')}}" alt="chemistry" class=" img-fluid">
                </div>
            </div></a>
    </section>
    <a href="{{route('contact')}}"><img src="{{asset('images/website/contactSup.png')}}" alt="support" class="d-none d-md-block d-md-flex justify-content-md-end mr-2 support"></a>
    @include('includes.footer')
    <script src="{{asset('js/front_end-app.js')}}"></script>
</body>
</html>
@endsection

