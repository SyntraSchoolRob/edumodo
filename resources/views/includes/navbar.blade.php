<nav class="navbar navbar-expand-lg navbar-light maxWidth1150 mx-auto" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <a itemprop="url" class="btn btnShop d-lg-none" href="{{route('shop')}}">Shop</a>
    <a itemprop="url" class="navbar-brand" href="{{route('index')}}"><img itemprop="image" src="images/headerLogo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navUlStyle">
            <li class="nav-item">
                <a itemprop="url" class="nav-link menuStyle" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item pl-lg-1">
                <a itemprop="url" class="nav-link menuStyle" href="{{route('login')}}">Account</a>
            </li>
            <li class="nav-item pl-lg-1">
                <a itemprop="url" class="nav-link menuStyle" href="{{route('product', ['id'=>4])}}">Product</a>
            </li>
            <li class="nav-item pl-lg-1">
                <a itemprop="url" class="nav-link menuStyle" href="{{route('checkout')}}">Checkout</a>
            </li>
            <li class="nav-item pl-lg-1">
                <a itemprop="url" class="nav-link menuStyle" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item pl-lg-1">
                <a itemprop="url" class="btn btnShop d-none d-lg-block" href="{{route('shop')}}">Shop</a>
            </li>
            <li class="nav-item">
                <a itemprop="url" class="nav-link menuStyle" href="{{route('cart')}}">Cart <i class="fas fa-shopping-basket"><span class="badge ">2</span></i></a>
            </li>
        </ul>
    </div>
</nav>
