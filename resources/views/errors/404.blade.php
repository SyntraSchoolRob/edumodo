<!doctype html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, follow">
    <title>Edumodo - 404</title>
    <link rel="icon" href="images/website/headerLogo.png">
    <link href="{{asset('css/front_end-app.css')}}" rel="stylesheet">
</head>
<body itemscope itemtype="https://schema.org/WebPage" class="bg-Beige">
<header class="p-0">
    <div class="maxWidth mx-auto">
        <nav class="navbar navbar-expand-lg navbar-light maxWidth1150 mx-auto" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <a itemprop="url" class="btn btnShop d-lg-none" href="shop.html">Shop</a>
            <a itemprop="url" class="navbar-brand" href="index.html"><img itemprop="image" src="images/headerLogo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navUlStyle">
                    <li class="nav-item">
                        <a itemprop="url" class="nav-link menuStyle" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item pl-lg-1">
                        <a itemprop="url" class="nav-link menuStyle" href="account.html">Account</a>
                    </li>
                    <li class="nav-item pl-lg-1">
                        <a itemprop="url" class="nav-link menuStyle" href="product.html">Product</a>
                    </li>
                    <li class="nav-item pl-lg-1">
                        <a itemprop="url" class="nav-link menuStyle" href="checkout.html">Checkout</a>
                    </li>
                    <li class="nav-item pl-lg-1">
                        <a itemprop="url" class="nav-link menuStyle" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item pl-lg-1">
                        <a itemprop="url" class="btn btnShop d-none d-lg-block" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a itemprop="url" class="nav-link menuStyle" href="cart.html">Cart <i class="fas fa-shopping-basket"><span class="badge ">2</span></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div class="maxWidth1150 mx-auto errorPage">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="index.html"><img src="images/headerLogo.png" alt="logo" height="150"></a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <h1 class="workSansB pt-4">404</h1>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            <a href="index.html" class="c5a9 hline"><p>Go back to our home page <i class="fas fa-arrow-right pl-2"></i></p></a>
        </div>
    </div>
</div>
<a href="contact.html"><img src="{{asset('images/website/contactSup.png')}}" alt="support" class="d-none d-md-block d-md-flex justify-content-md-end mr-2 support"></a>
@include('includes.footer')
<script src="app.js"></script>
</body>
</html>
