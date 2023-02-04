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
                                            <li class="menu-item">
                                                <Link href="/">Home</Link>
                                            </li>

                                            <li class="menu-item-has-children"><a href="#">Posts</a>
                                                <ul class="axil-submenu">
                                                    <li>
                                                        <a class="hover-flip-item-wrapper"
                                                            href="post-format-standard.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Format Standard">Post Format
                                                                    Standard</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper"
                                                            href="post-format-video.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Format Video">Post Format
                                                                    Video</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper"
                                                            href="post-format-gallery.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Format Gallery">Post Format
                                                                    Gallery</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="post-format-text.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Format Text Only">Post Format Text
                                                                    Only</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="post-layout-1.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Layout One">Post Layout One</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="post-layout-2.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Layout Two">Post Layout Two</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="post-layout-3.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Layout Three">Post Layout
                                                                    Three</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="post-layout-4.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Layout Four">Post Layout
                                                                    Four</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="post-layout-5.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Layout Five">Post Layout
                                                                    Five</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children megamenu-wrapper"><a href="#">Mega
                                                    Menu</a>
                                                <ul class="megamenu-sub-menu">
                                                    <li class="megamenu-item">

                                                        <!-- Start Verticle Nav  -->
                                                        <div class="axil-vertical-nav">
                                                            <ul class="vertical-nav-menu">
                                                                <li class="vertical-nav-item active">
                                                                    <a class="hover-flip-item-wrapper" href="#tab1">
                                                                        <span class="hover-flip-item">
                                                                            <span
                                                                                data-text="Accessibility">Accessibility</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="vertical-nav-item">
                                                                    <a class="hover-flip-item-wrapper" href="#tab2">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Android Dev">Android
                                                                                Dev</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="vertical-nav-item">
                                                                    <a class="hover-flip-item-wrapper" href="#tab3">
                                                                        <span class="hover-flip-item">
                                                                            <span
                                                                                data-text="Blockchain">Blockchain</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="vertical-nav-item">
                                                                    <a class="hover-flip-item-wrapper" href="#tab4">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Gadgets">Gadgets</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Start Verticle Nav  -->

                                                        <!-- Start Verticle Menu  -->
                                                        <div class="axil-vertical-nav-content">
                                                            <!-- Start One Item  -->
                                                            <div class="axil-vertical-inner tab-content"
                                                                id="tab1" style="display: block;">
                                                                <div class="axil-vertical-single">
                                                                    <div class="row">

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-01.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">India
                                                                                            may require online shops to
                                                                                            hand</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-02.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="CREATIVE">CREATIVE</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Lightweight,
                                                                                            grippable, and ready to
                                                                                            go.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-03.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="TRAVEL">TRAVEL</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Bold
                                                                                            new experience. Same Mac
                                                                                            magic.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-04.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="GADGETS">GADGETS</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Creative
                                                                                            Game With The New DJI Mavic
                                                                                            Air</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End One Item  -->

                                                            <!-- Start One Item  -->
                                                            <div class="axil-vertical-inner tab-content"
                                                                id="tab2">
                                                                <div class="axil-vertical-single">
                                                                    <div class="row">

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-04.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">India
                                                                                            may require online shops to
                                                                                            hand</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-03.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Lightweight,
                                                                                            grippable, and ready to
                                                                                            go.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-02.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Bold
                                                                                            new experience. Same Mac
                                                                                            magic.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-04.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Creative
                                                                                            Game With The New DJI Mavic
                                                                                            Air</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End One Item  -->

                                                            <!-- Start One Item  -->
                                                            <div class="axil-vertical-inner tab-content"
                                                                id="tab3">
                                                                <div class="axil-vertical-single">
                                                                    <div class="row">

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-04.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Creative
                                                                                            Game With The New DJI Mavic
                                                                                            Air</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-03.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Bold
                                                                                            new experience. Same Mac
                                                                                            magic.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-02.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Lightweight,
                                                                                            grippable, and ready to
                                                                                            go.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-04.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">India
                                                                                            may require online shops to
                                                                                            hand</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End One Item  -->

                                                            <!-- Start One Item  -->
                                                            <div class="axil-vertical-inner tab-content"
                                                                id="tab4">
                                                                <div class="axil-vertical-single">
                                                                    <div class="row">

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-01.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">India
                                                                                            may require online shops to
                                                                                            hand</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->
                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-04.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Lightweight,
                                                                                            grippable, and ready to
                                                                                            go.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-03.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Bold
                                                                                            new experience. Same Mac
                                                                                            magic.</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                        <!-- Start Post List  -->
                                                                        <div class="col-lg-3">
                                                                            <div class="content-block image-rounded">
                                                                                <div class="post-thumbnail mb--20">
                                                                                    <a href="post-details.html">
                                                                                        <img class="w-100"
                                                                                            src="assets/images/others/mega-post-04.jpg"
                                                                                            alt="Post Images">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="post-content">
                                                                                    <div class="post-cat">
                                                                                        <div class="post-cat-list">
                                                                                            <a class="hover-flip-item-wrapper"
                                                                                                href="#">
                                                                                                <span
                                                                                                    class="hover-flip-item">
                                                                                                    <span
                                                                                                        data-text="DESIGN">DESIGN</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <h5 class="title"><a
                                                                                            href="post-details.html">Creative
                                                                                            Game With The New DJI Mavic
                                                                                            Air</a></h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Post List  -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End One Item  -->

                                                        </div>
                                                        <!-- End Verticle Menu  -->
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                                <ul class="axil-submenu">
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="post-list.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post List">Post List</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="archive.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Post Archive">Post Archive</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="author.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Author Page">Author Page</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="about.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="About Page">About Page</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="contact.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Contact Us">Contact Us</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="404.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="404 Page">404 Page</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="maintenance.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Maintenance">Maintenance</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="hover-flip-item-wrapper" href="privacy-policy.html">
                                                            <span class="hover-flip-item">
                                                                <span data-text="Privacy Policy">Privacy Policy</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><a href="home-lifestyle-blog.html">Lifestyle</a></li>
                                            <li><a href="home-tech-blog.html">Gadgets</a></li>
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
