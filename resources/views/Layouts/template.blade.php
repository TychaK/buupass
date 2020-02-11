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
@yield('navigation')
<div class="theme-hero-area theme-hero-area-primary">
    <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg ws-action" style="background-image:url(./img/1500x800.png);"
             data-parallax="true"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
        <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
    </div>
    <div class="theme-hero-area-body">
        <div class="_pt-250 _pb-200 _pv-mob-50">
            <div class="container">
                <div class="theme-search-area-tabs">
                    <div class="theme-search-area-tabs-header _c-w _ta-mob-c">
                        <h1 class="theme-search-area-tabs-title">Start Your Jorney</h1>
                        <p class="theme-search-area-tabs-subtitle">Compare hundreds travel websites at once</p>
                    </div>
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-line nav-white nav-lg nav-mob-inline" role="tablist">
                            <li role="presentation">
                                <a aria-controls="SearchAreaTabs-4" role="tab" data-toggle="tab"
                                   href="#SearchAreaTabs-4">
                                    Book your Flight Now
                                </a>
                            </li>
                        </ul>
                        {{Form::open(['action'=>'SearchController@search_flight','class'=>'','method'=>'POST'])}}
                        <div class="tab-content _pt-20">
                            <div class="tab-pane active" id="SearchAreaTabs-4" role="tab-panel">
                                <div class="theme-search-area theme-search-area-stacked">
                                    <div class="theme-search-area-form">
                                        <div class="row" data-gutter="none">
                                            <div class="col-md-7 ">
                                                <div class="row" data-gutter="none">
                                                    <div class="col-md-6 ">
                                                        <div
                                                            class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                                            <div class="theme-search-area-section-inner">
                                                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                                                {{Form::text('location_from','',['required','class'=>'location_from theme-search-area-section-input','placeholder'=>'Leaving From Country','autocomplete'=>'off'])}}
                                                                {{Form::hidden('loc_from_code','',['required','class'=>'loc_from_code'])}}
                                                                {{Form::hidden('airport_from_code','',['required','class'=>'airport_from_code'])}}
                                                            </div>
                                                            <ul class="typeahead dropdown-menu location_from_suggestion_container"
                                                                role="listbox"
                                                                style="top: 55px; left: 0px; display: block;"></ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 ">
                                                        <div
                                                            class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                                            <div class="theme-search-area-section-inner">
                                                                <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                                                {{Form::text('location_to','',['required','class'=>'location_to theme-search-area-section-input','placeholder'=>'Leaving To (Country)','autocomplete'=>'off'])}}
                                                                {{Form::hidden('loc_to_code','',['required','class'=>'loc_to_code'])}}
                                                                {{Form::hidden('airport_to_code','',['required','class'=>'airport_to_code'])}}
                                                            </div>
                                                        </div>
                                                        <ul class="typeahead dropdown-menu location_to_suggestion_container"
                                                            role="listbox"
                                                            style="top: 55px; left: 0px; display: block;"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div
                                                    class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-bg-white theme-search-area-section-no-border theme-search-area-section-mr">
                                                    <div class="theme-search-area-section-inner">
                                                        <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                                        {{Form::text('departure_date','',['required','value'=>date('Y-m-d'),'class'=>'theme-search-area-section-input datePickerEnd _mob-h','placeholder'=>'Departure Date'])}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 ">
                                                <button
                                                    class="theme-search-area-submit _mt-0 theme-search-area-submit-no-border theme-search-area-submit-curved">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="theme-search-area-options _mob-h theme-search-area-options-white theme-search-area-options-dot-primary-inverse clearfix">
                                        <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                                            <label class="btn btn-primary active">
                                                <input type="radio" name="car-options" id="car-option-1" checked/>Any
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="car-options" id="car-option-2"/>Sedan
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="car-options" id="car-option-3"/>Hatchback
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="car-options" id="car-option-4"/>SUV
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="car-options" id="car-option-5"/>Crossover
                                            </label>
                                            <label class="btn btn-primary">
                                                <input type="radio" name="car-options" id="car-option-6"/>Coupe
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-col-border-white" data-gutter="0">
    <div class="col-md-3 ">
        <div class="banner banner-">
            <img class="banner-img" src="./img/600x413.png" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="banner banner-">
            <img class="banner-img" src="./img/600x413.png" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="banner banner-">
            <img class="banner-img" src="./img/600x413.png" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
        </div>
    </div>
    <div class="col-md-3 ">
        <div class="banner banner-">
            <img class="banner-img" src="./img/600x413.png" alt="Image Alternative text" title="Image Title"/>
            <a class="banner-link" href="#"></a>
        </div>
    </div>
</div>
<div class="theme-hero-area">
    <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light"
             style="background-image:url(img/patterns/travel/2.png);"></div>
        <div class="theme-hero-area-grad-mask"></div>
        <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
    </div>
    <div class="theme-hero-area-body">
        <div class="theme-page-section theme-page-section-xxl">
            <div class="container">
                <div class="theme-page-section-header theme-page-section-header-white">
                    <h5 class="theme-page-section-title">Cities to Travel</h5>
                    <p class="theme-page-section-subtitle">The most searched cities in March</p>
                </div>
                <div class="theme-inline-slider row" data-gutter="10">
                    <div class="owl-carousel owl-carousel-nav-white" data-items="5" data-loop="true" data-nav="true">
                        <div class="theme-inline-slider-item">
                            <div
                                class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                                <div class="banner-mask"></div>
                                <a class="banner-link" href="#"></a>
                                <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                                    <h5 class="banner-title _fs _fw-b">Bangkok</h5>
                                    <p class="banner-subtitle _fw-n _mt-5">Amet malesuada placerat</p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-inline-slider-item">
                            <div
                                class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                                <div class="banner-mask"></div>
                                <a class="banner-link" href="#"></a>
                                <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                                    <h5 class="banner-title _fs _fw-b">San Francisco</h5>
                                    <p class="banner-subtitle _fw-n _mt-5">Vehicula volutpat porta</p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-inline-slider-item">
                            <div
                                class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                                <div class="banner-mask"></div>
                                <a class="banner-link" href="#"></a>
                                <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                                    <h5 class="banner-title _fs _fw-b">Paris</h5>
                                    <p class="banner-subtitle _fw-n _mt-5">Commodo mattis id</p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-inline-slider-item">
                            <div
                                class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                                <div class="banner-mask"></div>
                                <a class="banner-link" href="#"></a>
                                <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                                    <h5 class="banner-title _fs _fw-b">London</h5>
                                    <p class="banner-subtitle _fw-n _mt-5">Adipiscing metus quis</p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-inline-slider-item">
                            <div
                                class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                                <div class="banner-mask"></div>
                                <a class="banner-link" href="#"></a>
                                <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                                    <h5 class="banner-title _fs _fw-b">New York</h5>
                                    <p class="banner-subtitle _fw-n _mt-5">Donec nam placerat</p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-inline-slider-item">
                            <div
                                class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                                <div class="banner-mask"></div>
                                <a class="banner-link" href="#"></a>
                                <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                                    <h5 class="banner-title _fs _fw-b">Dubai</h5>
                                    <p class="banner-subtitle _fw-n _mt-5">Curabitur habitasse porttitor</p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-inline-slider-item">
                            <div
                                class="banner _h-40vh _br-3 _bsh-xs banner-animate banner-animate-mask-in banner-animate-slow">
                                <div class="banner-bg" style="background-image:url(./img/400x500.png);"></div>
                                <div class="banner-mask"></div>
                                <a class="banner-link" href="#"></a>
                                <div class="banner-caption _p-20 _bg-w banner-caption-bottom banner-caption-dark">
                                    <h5 class="banner-title _fs _fw-b">Tokyo</h5>
                                    <p class="banner-subtitle _fw-n _mt-5">Feugiat lobortis tortor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-page-section theme-page-section-xxl">
    <div class="container">
        <div class="theme-page-section-header">
            <h5 class="theme-page-section-title">Top Destinations</h5>
            <p class="theme-page-section-subtitle">The most searched countries in March</p>
        </div>
        <div class="row row-col-gap" data-gutter="10">
            <div class="col-md-4 ">
                <div
                    class="banner _h-40vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                    <div class="banner-bg" style="background-image:url(./img/550x360.png);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">India</h5>
                        <p class="banner-subtitle">Incredeble !india</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 ">
                <div
                    class="banner _h-40vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                    <div class="banner-bg" style="background-image:url(./img/860x360.png);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">China</h5>
                        <p class="banner-subtitle">China like never before</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div
                    class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                    <div class="banner-bg" style="background-image:url(./img/800x800.png);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">Morocco</h5>
                        <p class="banner-subtitle">Much mor</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div
                    class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                    <div class="banner-bg" style="background-image:url(./img/800x800.png);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">Canada</h5>
                        <p class="banner-subtitle">Keep exploring</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div
                    class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                    <div class="banner-bg" style="background-image:url(./img/400x360.png);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">Portugal</h5>
                        <p class="banner-subtitle">Europe's west coast</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div
                    class="banner _h-33vh _br-3 banner-animate banner-animate-mask-in banner-animate-very-slow banner-animate-zoom-in">
                    <div class="banner-bg" style="background-image:url(./img/400x360.png);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _pt-100 banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">Malasia</h5>
                        <p class="banner-subtitle">Truly asia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-hero-area">
    <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg" style="background-image:url(./img/1500x800.png);"></div>
        <div class="theme-hero-area-inner-shadow theme-hero-area-inner-shadow-light"></div>
    </div>
    <div class="theme-hero-area-body">
        <div class="container">
            <div class="theme-page-section _p-0">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="theme-mobile-app">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="theme-mobile-app-section">
                                        <div class="theme-mobile-app-body">
                                            <div class="theme-mobile-app-header">
                                                <h2 class="theme-mobile-app-title">Download our app</h2>
                                                <p class="theme-mobile-app-subtitle">Book and manage your trips on the
                                                    go. Be notified of our hot deals and offers.</p>
                                            </div>
                                            <ul class="theme-mobile-app-btn-list">
                                                <li>
                                                    <a class="btn btn-dark theme-mobile-app-btn" href="#">
                                                        <i class="theme-mobile-app-logo">
                                                            <img src="img/brands/apple.png" alt="Image Alternative text"
                                                                 title="Image Title"/>
                                                        </i>
                                                        <span>Download on
                                  <br/>
                                  <span>App Store</span>
                                </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-dark theme-mobile-app-btn" href="#">
                                                        <i class="theme-mobile-app-logo">
                                                            <img src="img/brands/play-market.png"
                                                                 alt="Image Alternative text" title="Image Title"/>
                                                        </i>
                                                        <span>Download on
                                  <br/>
                                  <span>Play Market</span>
                                </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="theme-mobile-app-section"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
