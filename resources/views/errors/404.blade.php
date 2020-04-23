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
        @include('includes.navbar')
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
