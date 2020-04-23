@extends('layouts.base')
@section('title')Edumodo - Welcome @endsection
@section('description')Education for innovation and society @endsection
@section('author')Robbe @endsection
@section('keywords')education, innovation, software, security, shop, technology, society, bootstrap, php, syntra, school, university @endsection
@section('body')
<body itemscope itemtype="https://schema.org/WebPage">
<header class="p-0">
    <div class="bg-img maxWidth mx-auto">
        @include('includes.navbar')
        <div class="container-fluid p-0">
            <div class="headDiv row maxWidth1150 mx-auto">
                <div class="col-12 col-sm-8 col-md-7 col-lg-6 bg-sm-Beige pt-4 pt-lg-0">
                    <h1 itemprop="slogan" class="cBeige montserratB font-s-24 fs-39">Innovation for education and society</h1>
                    <p itemprop="description" id="pHead" class="myrProReg">Our interdisciplinary majors and minors mean you can
                        chart your own course for academic success.</p>
                    <a class="btn" id="buttonHead" href="{{route('index')}}">Visit Our Campus</a>
                </div>
                <div class="col-12 col-sm-4 col-md-5 col-lg-6 p-0">
                    <img src="{{asset('images/website/homeMobile.png')}}" alt="edumodo university" class="img-fluid d-sm-none">
                </div>
            </div>
        </div>
    </div>
</header>
<section class="container-fluid maxWidth1150 mx-auto section1 p-5 p-lg-none">
    <div class="row offset-lg-2">
        <div class="col col-lg-8">
            <h2 class="text-center font-s-24 fs-md-40 workSansB">Our Department</h2>
            <p class="text-center paraText">A hundred thousand grateful loves to your dear papa and mamma. Is your poor brother recovered of his rack-punch? Oh, dear! Oh, dear! How men should beware of wicked punch!</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-4">
            <div id="secDivBox1" class="rounded d-sm-flex d-md-block p-2 pb-lg-5">
                <div class="d-flex justify-content-center"><img itemprop="img" src="{{asset('images/website/sec1img1.png')}}" alt="online education" class="img-fluid"></div>
                <h3 class="text-white fs1-2rem fs-sm-1-6rem d-flex align-items-center justify-content-center workSansB">Online Education</h3>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div id="secDivBox2" class="rounded d-sm-flex d-md-block p-2 pb-lg-5 mt-3 mt-md-0">
                <div class="d-flex justify-content-center"><img itemprop="img" src="{{asset('images/website/sec1img2.png')}}" alt="modern education" class="img-fluid"></div>
                <h3 class="text-white fs1-2rem fs-sm-1-6rem d-flex align-items-center justify-content-center workSansB">Modern Education</h3>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
            <div id="secDivBox3" class="rounded d-sm-flex d-lg-block p-2 pb-lg-5 mt-3 mt-md-4 mt-lg-0">
                <div class="d-flex justify-content-center"><img itemprop="img" src="{{asset('images/website/sec1img3.png')}}" alt="offline education" class="img-fluid"></div>
                <h3 class="text-white fs1-2rem fs-sm-1-6rem d-flex align-items-center justify-content-center workSansB">Offline Education</h3>
            </div>
        </div>
    </div>
</section>
<!--    section2 Mobile+ Tablet-->
<section id="sectionID2" class="container-fluid maxWidth mx-auto bg-imgSec2 d-lg-none p-0">
    <div class="row maxWidth1150 mx-auto sec2Row">
        <div class="col-12 col-lg-6">
            <img itemprop="img" src="{{asset('images/website/sec2img1.png')}}" alt="video University" class="img-fluid">
        </div>
        <div class="col-12 col-lg-6">
            <h4 class="montserratB font-s-24 fs-md-40">Limitless learning, more possibilities</h4>
            <p class="sec2P1">The University of Rochester is one of the country's top-tier research universities. Our campuses are home to 200 academic majors, more than 2,000 faculty and instructional staff, and some 10,000 students—approximately half of whom are women.</p>
            <p>Learning at the University of Rochester is also on a very personal scale. Rochester remains one of the smallest and most collegiate among top research universities, with smaller classes, a low 10:1 student to teacher ratio, and increased interactions with faculty.</p>
            <div class="d-sm-flex">
                <div class="pr-5">
                    <p class="m-0 sec2P4000 secPGetallen montserratB">4000</p>
                    <p class="fontSize20 sec2P4000 montserratL">Students</p>
                </div>
                <div class="pr-5">
                    <p class="m-0 secPGetallen montserratB secP260">260</p>
                    <p class="secP260 fontSize20 montserratL">Courses</p>
                </div>
                <div>
                    <p class="m-0 secPGetallen montserratB secP5679">5679</p>
                    <p class="secP5679 fontSize20 montserratL">Hours video</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    section2 large& xl devices-->
<section class="container-fluid d-none d-lg-block p-0">
    <div class="row maxWidth mx-auto">
        <div class="col col-lg-6 col-xl-6 p-0">
            <img itemprop="img" id="sec2ImgLg" src="{{asset('images/website/sec2img1lg.png')}}" alt="video University" class="d-xl-none">
            <img itemprop="img" id="sec2ImgXl" src="{{asset('images/website/sec2img1lg.png')}}" alt="video University" class="d-none d-xl-block img-fluid">
        </div>
        <div id="sec2LgDivText" class="col col-lg-6 col-xl-4 pt-xl-5">
            <h4 class="montserratB fs-md-40">Limitless learning, more possibilities</h4>
            <p class="sec2P1">The University of Rochester is one of the country's top-tier research universities. Our campuses are home to 200 academic majors, more than 2,000 faculty and instructional staff, and some 10,000 students—approximately half of whom are women.</p>
            <p>Learning at the University of Rochester is also on a very personal scale. Rochester remains one of the smallest and most collegiate among top research universities, with smaller classes, a low 10:1 student to teacher ratio, and increased interactions with faculty.</p>
            <div class="d-flex pt-xl-5">
                <div class="pr-5">
                    <p class="m-0 secPGetallen sec2P4000 montserratB">4000</p>
                    <p class="fontSize20 sec2P4000 montserratL">Students</p>
                </div>
                <div class="pr-5">
                    <p class="m-0 secPGetallen montserratB secP260">260</p>
                    <p class="secP260 fontSize20 montserratL">Courses</p>
                </div>
                <div>
                    <p class="m-0 secPGetallen montserratB secP5679">5679</p>
                    <p class="secP5679 fontSize20 montserratL">Hours video</p>
                </div>
            </div>
        </div>
        <div class="col col-xl-2">
        </div>
    </div>
</section>
<!--    section3-->
<section class="container-fluid maxWidth1150 mx-auto mb-5">
    <div class="row">
        <div class="col d-flex justify-content-center pb-4">
            <h5 class="montserratB secPGetallen">Around the University</h5>
        </div>
    </div>
    <div class="row p-2 p-sm-5 p-md-1">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                <img src="{{asset('images/website/sec3img1.png')}}" class="card-img-top" alt="photoshop">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">Photoshop CC Essential Training: The Basics</h6>
                    <p class="card-text robReg12">Graphic Design</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-0">
            <div class="card">
                <img src="{{asset('images/website/sec3img2.png')}}" class="card-img-top" alt="android">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">Get Started Coding Android Apps With Kotlin</h6>
                    <p class="card-text robReg12">Global System</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <div class="card">
                <img src="{{asset('images/website/sec3img3.png')}}" class="card-img-top" alt="cinema 4d">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">Create Turntable Animations With Cinema 4D</h6>
                    <p class="card-text robReg12">Computer & Information Technology</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <div class="card">
                <img itemprop="img" src="{{asset('images/website/sec3img4.png')}}" class="card-img-top" alt="bootstrap">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">A Beginner’s Guide to the  New Bootstrap 4 Grid</h6>
                    <p class="card-text robReg12">Web Development</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2 p-sm-5 p-md-1 mt-lg-3">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
                <img src="{{asset('images/website/sec3img5.png')}}" class="card-img-top" alt="vue">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">A Designer’s Guide to Vue.js  Components</h6>
                    <p class="card-text robReg12">Art Deperments</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-md-0">
            <div class="card">
                <img src="{{asset('images/website/sec3img6.png')}}" class="card-img-top" alt="swift">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">Code a Swift App With Realm  Mobile Database</h6>
                    <p class="card-text robReg12">Music</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <div class="card">
                <img src="{{asset('images/website/sec3img7.png')}}" class="card-img-top" alt="adobe">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">10 Essential Design Tips in  Adobe Illustrator</h6>
                    <p class="card-text robReg12">Technology Information</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <div class="card">
                <img src="{{asset('images/website/sec3img8.png')}}" class="card-img-top" alt="php">
                <div class="card-body p-3">
                    <h6 class="card-title worksansM colorDB">Modern PHP From The  Beginning</h6>
                    <p class="card-text robReg12">Data Science</p>
                    <p class="pt-4 mb-1 worksansR fs14">Keep reading...</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    container section3 background-->
<div class="container-fluid p-0">
    <div class="row maxWidth mx-auto">
        <div class="col d-flex justify-content-end p-0">
            <img itemprop="img" id="imgbgHalveBolPositie" src="{{asset('images/website/sec3bgIms.png')}}" alt="background" class="img-fluid">
        </div>
    </div>
</div>
<a href="{{route('contact')}}"><img src="{{asset('images/website/contactSup.png')}}" alt="support" class="d-none d-md-block d-md-flex justify-content-md-end mr-2 support"></a>
@include('includes.footer')
</body>
</html>
@endsection
