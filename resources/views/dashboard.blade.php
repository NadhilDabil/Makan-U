<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style-footer.css') }}" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <x-navbar />
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container-fluid">
            <div class="col">
                <div class="hero__search w-full">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                                <div class="content__dropdown">

                                </div>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="hero__item set-bg"
                                data-setbg="{{ asset('assets/img/banner/banner-3.png') }}">
                                <div class="hero__text">
                                    <span>MAKANAN SEHAT</span>
                                    <h2>Enak Kenyang<br />Murah Lagi</h2>
                                    <p>Free Pickup and Delivery Available</p>
                                    <a href="#" class="primary-btn">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="hero__item set-bg" data-setbg="{{ asset('assets/img/hero/banner.jpg') }}">
                                <div class="hero__text">
                                    <span>FRUIT FRESH</span>
                                    <h2>Vegetable <br />100% Organic</h2>
                                    <p>Free Pickup and Delivery Available</p>
                                    <a href="#" class="primary-btn">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </section>
    <!-- Hero Section End -->


    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="section-title from-blog__title">
                <h2>Resto Sekitar Kamu</h2>
            </div>
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <a href="#" class="categories__item">
                            <div class="">
                                <img class="image__categories__item"
                                    src="{{ asset('assets/img/thumbnail/thumbnail-1.jpg') }}" alt="Shop Image">
                                <h5>Nyapi, Bandung</h5>
                            </div>
                            <p><i class="fa fa-star" aria-hidden="true" style="color: yellow"></i> 4.8 5rb++ rating
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="categories__item">
                            <div class="">
                                <img class="image__categories__item"
                                    src="{{ asset('assets/img/thumbnail/thumbnail-2.jpg') }}" alt="Shop Image">
                                <h5>Nyapi, Bandung</h5>
                            </div>
                            <p><i class="fa fa-star" aria-hidden="true" style="color: yellow"></i> 4.8 5rb++ rating
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="categories__item">
                            <div class="">
                                <img class="image__categories__item"
                                    src="{{ asset('assets/img/thumbnail/thumbnail-3.jpeg') }}" alt="Shop Image">
                                <h5>Nyapi, Bandung</h5>
                            </div>
                            <p><i class="fa fa-star" aria-hidden="true" style="color: yellow"></i> 4.8 5rb++ rating
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="categories__item">
                            <div class="">
                                <img class="image__categories__item"
                                    src="{{ asset('assets/img/thumbnail/thumbnail-1.jpg') }}" alt="Shop Image">
                                <h5>Nyapi, Bandung</h5>
                            </div>
                            <p><i class="fa fa-star" aria-hidden="true" style="color: yellow"></i> 4.8 5rb++ rating
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="categories__item">
                            <div class="">
                                <img class="image__categories__item"
                                    src="{{ asset('assets/img/thumbnail/thumbnail-2.jpg') }}" alt="Shop Image">
                                <h5>Nyapi, Bandung</h5>
                            </div>
                            <p><i class="fa fa-star" aria-hidden="true" style="color: yellow"></i> 4.8 5rb++ rating
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->


    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('assets/img/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('assets/img/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            {{-- <div class="col-lg-4 col-md-6"> --}}
            <div class="latest-product__text">
                <h4>Orang-orang pada doyan jajan ini.</h4>
                <div class="latest-product__slider owl-carousel">
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="{{ asset('assets/img/latest-product/lp-1.jpg') }}" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="{{ asset('assets/img/latest-product/lp-2.jpg') }}" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="{{ asset('assets/img/latest-product/lp-3.jpg') }}" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <hr>
                    </div>
                    <div class="latest-prdouct__slider__item">
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="{{ asset('assets/img/latest-product/lp-1.jpg') }}" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="{{ asset('assets/img/latest-product/lp-2.jpg') }}" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <hr>
                        <a href="#" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="{{ asset('assets/img/latest-product/lp-3.jpg') }}" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>Crab Pool Security</h6>
                                <span>$30.00</span>
                            </div>
                        </a>
                        <hr>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <x-footer />
    <!-- Footer Section End -->
</body>

<!-- Js Plugins -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>





</html>
