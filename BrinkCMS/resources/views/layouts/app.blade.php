<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Page Title</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('components.seo')

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main-theme/images/favicon.png') }}') }}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('main-theme/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main-theme/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('main-theme/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('main-theme/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('main-theme/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('main-theme/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('main-theme/css/style.css') }}">

</head>

<body class="active-dark-mode">
 
    <div class="main-wrapper">
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>


        @include('header')

        <!-- Start Mobile Menu Area  -->
        <div class="popup-mobilemenu-area">
            <div class="inner">
                <div class="mobile-menu-top">
                    <div class="logo">
                        <a href="index.html">
                            <img class="dark-logo" src="{{ asset('main-theme/images/logo/logo-black.png') }}" alt="Logo Images">
                            <img class="light-logo" src="{{ asset('main-theme/images/logo/logo-white2.png') }}" alt="Logo Images">
                        </a>
                    </div>
                    <div class="mobile-close">
                        <div class="icon">
                            <i class="fal fa-times"></i>
                        </div>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="menu-item-has-children"><a href="#">Home</a>
                        <ul class="axil-submenu">
                            <li><a href="index.html">Home Default</a></li>
                            <li><a href="home-creative-blog.html">Home Creative Blog</a></li>
                            <li><a href="home-seo-blog.html">Home Seo Blog</a></li>
                            <li><a href="home-tech-blog.html">Home Tech Blog</a></li>
                            <li><a href="home-lifestyle-blog.html">Home Lifestyle Blog</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Categories</a>
                        <ul class="axil-submenu">
                            <li><a href="post-details.html">Accessibility</a></li>
                            <li><a href="post-details.html">Android Dev</a></li>
                            <li><a href="post-details.html">Accessibility</a></li>
                            <li><a href="post-details.html">Android Dev</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Post Format</a>
                        <ul class="axil-submenu">
                            <li><a href="post-format-standard.html">Post Format Standard</a></li>
                            <li><a href="post-format-video.html">Post Format Video</a></li>
                            <li><a href="post-format-gallery.html">Post Format Gallery</a></li>
                            <li><a href="post-format-text.html">Post Format Text Only</a></li>
                            <li><a href="post-layout-1.html">Post Layout One</a></li>
                            <li><a href="post-layout-2.html">Post Layout Two</a></li>
                            <li><a href="post-layout-3.html">Post Layout Three</a></li>
                            <li><a href="post-layout-4.html">Post Layout Four</a></li>
                            <li><a href="post-layout-5.html">Post Layout Five</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="axil-submenu">
                            <li><a href="post-list.html">Post List</a></li>
                            <li><a href="archive.html">Post Archive</a></li>
                            <li><a href="author.html">Author Page</a></li>
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="maintenance.html">Maintenance</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <div class="buy-now-btn">
                    <a href="#">Buy Now <span class="badge">$15</span></a>
                </div>
            </div>
        </div>
        <!-- End Mobile Menu Area  -->

        @yield('content')

        @include('footer')

        <!-- Start Back To Top  -->
        <a id="backto-top"></a>
        <!-- End Back To Top  -->

    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('main-theme/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('main-theme/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('main-theme/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('main-theme/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('main-theme/js/vendor/tweenmax.min.js') }}"></script>
    <script src="{{ asset('main-theme/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('main-theme/js/vendor/jquery.style.switcher.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('main-theme/js/main.js') }}"></script>

</body>

</html>