@extends('layouts.frontend')

@section('content')


        <h1 class="d-none">Home Seo Blog</h1>
        <div class="axil-seo-post-banner seoblog-banner axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                        
                        <!-- Start Post Grid  -->
                        <div class="content-block post-grid post-grid-large">
                            <div class="post-thumbnail">
                                <a href="{{ $homepageData['featuredPost']->url }}">
                                    <img src="{{ $homepageData['featuredPost']->mainImage }}" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-grid-content">
                                <div class="post-content">
                                    <div class="post-cat">
                                        <div class="post-cat-list">
                                            <a class="hover-flip-item-wrapper" href="#">
                                                <span class="hover-flip-item">
                                                    <span data-text="{{ $homepageData['featuredPost']->categories }}">{{ $homepageData['featuredPost']->categories }}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="{{ $homepageData['featuredPost']->url }}">{{ $homepageData['featuredPost']->title }}</a></h3>
                                    <div class="post-meta-wrapper">
                                        <div class="post-meta">
                                            <div class="post-author-avatar border-rounded">
                                                <img src="assets/images/post-images/author/author-image-2.png" alt="Author Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="post-author-name">
                                                    <a class="hover-flip-item-wrapper" href="author.html">
                                                        <span class="hover-flip-item">
                                                            <span data-text="Rahabi Khan">Rahabi Khan</span>
                                                        </span>
                                                    </a>
                                                </h6>
                                                <ul class="post-meta-list">
                                                    <li>{{ $homepageData['featuredPost']->publishDateTime }}</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start Post Grid  -->
                    </div>

                    <div class="col-xl-5 col-lg-5 col-md-12 col-12 mt_md--30 mt_sm--30">
                        <!-- Start Single Post  -->
                        <div class="content-block post-medium post-medium-border">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-images/post-seo-sm-01.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="BUSINESS">BUSINESS</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">How to craft great page titles for SEO</a></h4>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                        <!-- Start Single Post  -->
                        <div class="content-block post-medium post-medium-border">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-images/post-seo-sm-02.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="MARKETING">MARKETING</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Learn What Marketing Is and How It Is Used</a></h4>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                        <!-- Start Single Post  -->
                        <div class="content-block post-medium post-medium-border">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-images/post-seo-sm-03.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="DIGITAL SERVICE">DIGITAL SERVICE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">How to use your keyphrase in the SEO title</a></h4>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                        <!-- Start Single Post  -->
                        <div class="content-block post-medium post-medium-border">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-images/post-seo-sm-04.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a class="hover-flip-item-wrapper" href="#">
                                            <span class="hover-flip-item">
                                                <span data-text="BUSINSS KEY">BUSINSS KEY</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="post-details.html">Facebook for Business: Marketing on Facebook</a></h4>
                            </div>
                        </div>
                        <!-- End Single Post  -->
                    </div>
                </div>
            </div>
        </div>

@endsection