<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets\css\font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets\css\elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets\css\nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets\css\jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets\css\owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets\css\slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{asset('assets\css\style.css')}}" type="text/css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('_layouts.header')
@yield('content')



<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: Երևան, Ավան, Աճառյան</li>
                        <li>Phone: +374 33 351 155</li>
                        <li>Email: info@artshin.am</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
{{--                <div class="footer__widget">--}}
{{--                    <h6>Useful Links</h6>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">About Us</a></li>--}}
{{--                        <li><a href="#">About Our Shop</a></li>--}}
{{--                        <li><a href="#">Secure Shopping</a></li>--}}
{{--                        <li><a href="#">Delivery infomation</a></li>--}}
{{--                        <li><a href="#">Privacy Policy</a></li>--}}
{{--                        <li><a href="#">Our Sitemap</a></li>--}}
{{--                    </ul>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Who We Are</a></li>--}}
{{--                        <li><a href="#">Our Services</a></li>--}}
{{--                        <li><a href="#">Projects</a></li>--}}
{{--                        <li><a href="#">Contact</a></li>--}}
{{--                        <li><a href="#">Innovation</a></li>--}}
{{--                        <li><a href="#">Testimonials</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
{{--                    <h6>Join Our Newsletter Now</h6>--}}
{{--                    <p>Get E-mail updates about our latest shop and special offers.</p>--}}
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p>
                            Copyright ©<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript">document.write(new Date().getFullYear());</script>2020 All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://amiraghyan.info" target="_blank">Amiraghyan.info</a>
                        </p></div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('assets\js/jquery-3.3.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets\js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets\js/jquery.nice-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets\js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets\js/jquery.slicknav.js')}}" type="text/javascript"></script>
<script src="{{asset('assets\js/mixitup.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets\js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets\js/main.js')}}" type="text/javascript"></script>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="text/javascript"></script>
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
