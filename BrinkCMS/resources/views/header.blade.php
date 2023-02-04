        <!-- Start Header -->
        <header class="header axil-header header-style-4  header-light header-sticky">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <div
                                class="header-top-bar d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <ul class="header-top-date liststyle d-flex flrx-wrap align-items-center mr--20">
                                    <li><a href="#">{{ date('d M, Y') }}</a></li>
                                </ul>

                                <ul class="header-top-nav liststyle d-flex flrx-wrap align-items-center">
                                    @if (Auth::user())
                                        <li>
                                            <Link href="/profile">Welcome, {{ Auth::User()->name }}!
                                            </Link>
                                        </li>
                                    @endif
                                    <li><a href="#">Advertisement</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-12">
                            <ul class="social-share-transparent md-size justify-content-center justify-content-md-end">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-4 col-md-4 col-12">
                            <div
                                class="wrapper d-block d-sm-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                                <div class="logo">
                                    <Link href="/">
                                    <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Blogar logo">
                                    <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Blogar logo">
                                    </Link>
                                </div>
                                <div class="mainmenu-wrapper d-none d-xl-block">
                                    <nav class="mainmenu-nav">
                                        <!-- Start Mainmanu Nav -->
                                        <ul class="mainmenu">

                                            @foreach ($topNavigation as $navItem)
                                                @if ($navItem['position'] === 'main_nav_bar__simple_link')
                                                    <li class="menu-item">
                                                        <Link href="$navItem['$linkURL']">
                                                        {{ $navItem['linkText'] }}
                                                        </Link>
                                                    </li>
                                                @elseif($navItem['position'] === 'main_nav_bar__mega_menu')
                                                    <?php $articles = []; ?>
                                                    <x-header-mega-menu :articles="[]" :title="$navItem['linkText']"
                                                        :slug="$navItem['$linkURL']">
                                                    </x-header-mega-menu>
                                                @endif
                                            @endforeach

                                        </ul>
                                        <!-- End Mainmanu Nav -->
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-8 col-md-8 col-12">
                            <div
                                class="header-search d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                                <form class="header-search-form d-sm-block d-none">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i
                                                class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                                <div class="mobile-search-wrapper d-sm-none d-block">
                                    <button class="search-button-toggle"><i class="fal fa-search"></i></button>
                                    <form class="header-search-form">
                                        <div class="axil-search form-group">
                                            <button type="submit" class="search-button"><i
                                                    class="fal fa-search"></i></button>
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                    </form>
                                </div>
                                <ul class="metabar-block">
                                    @if (Auth::user())
                                        <li class="icon">
                                            <Link href="#">
                                            <i class="fas fa-bookmark"></i>
                                            </Link>
                                        </li>
                                        <li class="icon">
                                            <Link href="#">
                                            <i class="fas fa-bell"></i>
                                            </Link>
                                        </li>
                                        <li>
                                            <Link href="/profile">
                                            <img src="{{ Auth::user()->profileImage }}"
                                                alt="{{ Auth::user()->name }} profile image">
                                            </Link>
                                        </li>
                                    @else
                                        <li class="sign-in">
                                            <Link href="/login">Sign In</Link>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Start Hamburger Menu  -->
                                <div class="hamburger-menu d-block d-xl-none">
                                    <div class="hamburger-inner">
                                        <div class="icon"><i class="fal fa-bars"></i></div>
                                    </div>
                                </div>
                                <!-- End Hamburger Menu  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start Header -->

        <!-- Start Mobile Menu Area  -->
        <div class="popup-mobilemenu-area">
            <div class="inner">
                <div class="mobile-menu-top">
                    <div class="logo">
                        <Link href="/">
                        <img class="dark-logo" src="assets/images/logo/logo-black.png" alt="Logo Images">
                        <img class="light-logo" src="assets/images/logo/logo-white2.png" alt="Logo Images">
                        </Link>
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
