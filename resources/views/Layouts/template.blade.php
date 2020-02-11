<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Travel Mate - Index</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/lineicons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/weather-icons.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@include('Sections.nav')
@yield('content')

<div class="theme-footer" id="mainFooter">
    <div class="container _ph-mob-0">
        <div class="row row-eq-height row-mob-full" data-gutter="60">
            <div class="col-md-3">
                <div class="theme-footer-section theme-footer-">
                    <a class="theme-footer-brand _mb-mob-30" href="#">
                        <img src="img/logo-black.png" alt="Image Alternative text" title="Image Title"/>
                    </a>
                    <div class="theme-footer-brand-text">
                        <p>Eget est blandit pulvinar morbi ligula vel dignissim inceptos dignissim eleifend tortor
                            tempus dictumst tincidunt</p>
                        <p>Neque eu integer venenatis fames ultricies pretium mauris maecenas interdum pharetra sodales
                            congue a felis</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="theme-footer-section theme-footer-">
                            <h5 class="theme-footer-section-title">Travel Mate</h5>
                            <ul class="theme-footer-section-list">
                                <li>
                                    <a href="#">About Travel Mate</a>
                                </li>
                                <li>
                                    <a href="#">Mobile App</a>
                                </li>
                                <li>
                                    <a href="#">Customer Support</a>
                                </li>
                                <li>
                                    <a href="#">Advertising</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="theme-footer-section theme-footer-">
                            <h5 class="theme-footer-section-title">Explore</h5>
                            <ul class="theme-footer-section-list">
                                <li>
                                    <a href="#">Countries</a>
                                </li>
                                <li>
                                    <a href="#">Regions</a>
                                </li>
                                <li>
                                    <a href="#">Cities</a>
                                </li>
                                <li>
                                    <a href="#">Districs</a>
                                </li>
                                <li>
                                    <a href="#">Airports</a>
                                </li>
                                <li>
                                    <a href="#">Hotels</a>
                                </li>
                                <li>
                                    <a href="#">Places of Interest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="theme-footer-section theme-footer-">
                            <h5 class="theme-footer-section-title">Book</h5>
                            <ul class="theme-footer-section-list">
                                <li>
                                    <a href="#">Apartments</a>
                                </li>
                                <li>
                                    <a href="#">Resorts</a>
                                </li>
                                <li>
                                    <a href="#">Villas</a>
                                </li>
                                <li>
                                    <a href="#">Hostels</a>
                                </li>
                                <li>
                                    <a href="#">B&Bs</a>
                                </li>
                                <li>
                                    <a href="#">Guesthouses</a>
                                </li>
                                <li>
                                    <a href="#">Hotel Chains</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="theme-footer-section theme-footer-section-subscribe bg-grad _mt-mob-30">
                    <div class="theme-footer-section-subscribe-bg"
                         style="background-image:url(img/footer/footer_subscribe_bg.png);"></div>
                    <div class="theme-footer-section-subscribe-content">
                        <h5 class="theme-footer-section-title">Save up to 50% off your next trip</h5>
                        <p class="text-muted">Subscribe to unlock our secret deals</p>
                        <form>
                            <div class="form-group">
                                <input class="form-control theme-footer-subscribe-form-control" type="email"
                                       placeholder="Type your e-mail here"/>
                            </div>
                            <button class="btn btn-primary-invert btn-shadow text-upcase theme-footer-subscribe-btn"
                                    type="submit">Get deals
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="theme-copyright-text">Copyright &copy; 2018
                    <a href="#">Bookify</a>. All rights reserved.
                </p>
            </div>
            <div class="col-md-6">
                <ul class="theme-copyright-social">
                    <li>
                        <a class="fa fa-facebook" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-google" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-twitter" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-youtube-play" href="#"></a>
                    </li>
                    <li>
                        <a class="fa fa-instagram" href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/moment.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&callback=initMap&libraries=places"></script>
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/blur-area.js')}}"></script>
<script src="{{asset('js/icheck.js')}}"></script>
<script src="{{asset('js/gmap.js')}}"></script>
<script src="{{asset('js/magnific-popup.js')}}"></script>
<script src="{{asset('js/ion-range-slider.js')}}"></script>
<script src="{{asset('js/sticky-kit.js')}}"></script>
<script src="{{asset('js/smooth-scroll.js')}}"></script>
<script src="{{asset('js/fotorama.js')}}"></script>
<script src="{{asset('js/bs-datepicker.js')}}"></script>
<script src="{{asset('js/typeahead.js')}}"></script>
<script src="{{asset('js/quantity-selector.js')}}"></script>
<script src="{{asset('js/countdown.js')}}"></script>
<script src="{{asset('js/window-scroll-action.js')}}"></script>
<script src="{{asset('js/fitvid.js')}}"></script>
<script src="{{asset('js/youtube-bg.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/search_places.js')}}"></script>
</body>
</html>
