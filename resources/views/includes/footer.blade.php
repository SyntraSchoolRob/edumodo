<footer class="container-fluid mt-lg-4 p-0">
    <div class="maxWidth mx-auto bgfooter rounded-top">
        <div class="row maxWidth1150 mx-auto pt-5 pb-5">
            <div class="col-12 col-md-3">
                <img itemprop="img" src="{{asset('images/website/footer.png')}}" alt="logo" class="img-fluid">
                <p class="pt-2 fs14">Edumodo focuses on creating magnificent education websites with ease. Take the lead in the race with learned</p>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <p class="text-white footGray fs1-2rem">Community</p>
                <a itemprop="url" class="footpGray" href="{{route('index')}}"><p>Home</p></a>
                <a itemprop="url" class="footpGray" href="{{route('login')}}"><p>Account</p></a>
            </div>
            <div class="col-6 col-sm-4 col-md-2">
                <p class="text-white footGray fs1-2rem">Shop</p>
                <a itemprop="url" class="footpGray" href="{{route('shop')}}"><p>Go shopping</p></a>
                <a itemprop="url" class="footpGray" href="{{route('product', ['id'=>4])}}"><p>Product</p></a>
                <a itemprop="url" class="footpGray" href="{{route('checkout')}}"><p>Checkout</p></a>
            </div>
            <div class="col-12 col-sm-4 col-md-2">
                <p class="text-white footGray fs1-2rem">Support</p>
                <a itemprop="url" class="footpGray" href="{{route('contact')}}"><p>Get help</p></a>
                <a itemprop="url" class="footpGray" href="{{route('cart')}}"><p>Shoppingcart</p></a>
            </div>
            <div class="col-12 col-md-3">
                <div class="content">
                    <form>
                        <p class="text-white footGray fs1-2rem">Newsletter</p>
                        <p>Follow all our latest news & updates</p>
                        <div class="input-group">
                            <input type="email" class="form-control bg-white" placeholder="email" aria-label="Subscribe to our newsletter">
                            <span class="input-group-btn">
                                    <button class="btn rounded-0 bgfootBut text-white" type="submit" name="btnNews">Subscribe</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row maxWidth mx-auto bgcopy">
            <div class="col maxWidth1150 mx-auto d-md-flex pt-2">
                <p itemprop="copyrightHolder" class="fs14">&copy; 2020 Edumodo</p>
                <p class="fs14 pl-md-3 m-0">Privacy policy</p>
                <p class="fs14 pl-md-3 m-0 pb-3">Terms of use</p>
            </div>
        </div>
    </div>
</footer>
