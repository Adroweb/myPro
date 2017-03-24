<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <base href="/">
    {{--<title>{{title}}</title>--}}
    {{--<meta name="description" content="{{description}}">--}}
    <meta name="fragment" content="!">

    <!-- Apple META -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Facebook META -->
    {{--<meta property="fb:app_id" content="{{facebookAppId}}">--}}
    {{--<meta property="og:site_name" content="{{title}}">--}}
    {{--<meta property="og:title" content="{{title}}">--}}
    {{--<meta property="og:description" content="{{description}}">--}}
    {{--<meta property="og:url" content="{{url}}">--}}
    {{--<meta property="og:image" content="{{logo}}">--}}
    {{--<meta property="og:type" content="website">--}}

    {{--<!-- Twitter META -->--}}
    {{--<meta name="twitter:title" content="{{title}}">--}}
    {{--<meta name="twitter:description" content="{{description}}">--}}
    {{--<meta name="twitter:url" content="{{url}}">--}}
    {{--<meta name="twitter:image" content="{{logo}}">--}}

    <!-- Fav Icon -->
    {{--<link href="{{favicon}}" rel="shortcut icon" type="image/x-icon">--}}



    {{--<link rel="stylesheet" href="{{ URL::asset('assets/css/core.css') }}">--}}
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bootstrap.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/core.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/b-toolkit.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/bg.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/carousel.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/demo.css">
    <link media="all" type="text/css" rel="stylesheet" href="/assets/css/select2.css">
    {{--<link rel="stylesheet" type="text/css" href="/assets/css/b-toolkit.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/assets/css/bg.css">--}}

    {{--<link rel="stylesheet" type="text/css" href="/assets/css/carousel.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="/assets/css/demo.css">--}}





</head>

<body >
<div class="container header-sm">
    <header class="transparent">
        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                        <div class="col">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                        <!-- social icons -->
                        <div class="col social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        <!-- social icons close -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="./">
                            <img class="logo" src="assets/img/logo.png" alt="Shop Live">
                        </a>
                    </div>
                    <!-- logo close -->

                    <!-- small button begin -->
                    <span id="menu-btn"><i class="glyphicon glyphicon-menu-hamburger"></i></span>
                    <!-- small button close -->
                    <!-- mobile menu -->

                    <!-- mobile menu -->
                    <!-- main menu -->
                    <div class="nav-collapse">
                        <ul id="mainmenu" class="nav">
                            <li>
                                <a href="/">Home</a>

                            </li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/stores">Stores</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/stores">Blog</a></li>





                            <li><a href="#">Login</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/signin">Customer Login</a>
                                    </li>
                                    <li>
                                        <a href="/sellerlogin">Seller Login</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Register</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/signup">Customer SignUp</a>
                                    </li>
                                    <li>
                                        <a href="/registerSeller">Seller SignUp</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- mainmenu close -->

            </div>
        </div>
    </header>
</div>


<section class="content">
    <section class="container" style="width:100%;padding:0;background-color:#333">

        @yield('content')
    </section>
</section>

<footer id="section-steps-3">
    <div class="container" >
        <div class="row">
            <div class="col-md-4">
                <a href="./"><img src="assets/img/logo.png" class="logo-small" alt="Shop Life"><br></a>
                We are team based on Brookylin. Our expertise on Interior Design. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </div>

            <div class="col-md-4">
                <div class="widget widget_recent_post">
                    <h3>Latest News</h3>
                    <ul>
                        <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                        <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                        <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                        <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                        <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Contact Us</h3>
                <div class="widget widget-address">
                    <address>
                        <span>100 Mainstreet Center, Sydney</span>
                        <span><strong>Phone:</strong>(208) 333 9296</span>
                        <span><strong>Fax:</strong>(208) 333 9298</span>
                        <span><strong>Email:</strong><a href="mailto:contact@adroweb.com">contact@adroweb.com</a></span>
                        <span><strong>Web:</strong><a href="#">http://adroweb.com</a></span>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    © Copyright 2016 - Shop Life | Powered By <a href="//www.adroweb.com" target="_blank" ><span class="id-color">Adroweb</span></a>
                </div>
                <div class="col-md-6 text-right">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                        <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>



<!--Load The Socket.io File-->




{{--<script type="text/javascript" src="assets/js/carousel.js"></script>--}}
<script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/kat.js"></script>

<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="/assets/js/select2.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $('.category').select2({
            'width' : '30%'
        });
    });

</script>

</body>

</html>
