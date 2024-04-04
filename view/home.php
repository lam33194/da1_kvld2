<!-- Hero/Intro Slider Start -->
<div class="section">
    <div class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Single Hero Slider Item Start -->
                <div class="hero-slide-item-two swiper-slide">

                    <!-- Hero Slider Background Image Start-->
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slide-2.jpg" alt="" />
                    </div>
                    <!-- Hero Slider Background Image End-->

                    <!-- Hero Slider Container Start -->
                    <div class="container">

                        <div class="row">
                            <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                <h2 class="title">
                                    Fashion New <br />
                                    Collection
                                </h2>
                                <p>Up to 70% off selected Product</p>
                                <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                            </div>
                        </div>

                    </div>
                    <!-- Hero Slider Container End -->

                </div>
                <!-- Single Hero Slider Item End -->

                <!-- Single Hero Slider Item Start -->
                <div class="hero-slide-item-two swiper-slide">

                    <!-- Hero Slider Background Image Start -->
                    <div class="hero-slide-bg">
                        <img src="assets/images/slider/slide-2-2.jpg" alt="" />
                    </div>
                    <!-- Hero Slider Background Image End -->

                    <!-- Hero Slider Container Start -->
                    <div class="container">
                        <div class="row">
                            <div class="hero-slide-content col-lg-8 col-xl-6 col-12 text-lg-center text-left">
                                <h2 class="title">
                                    Trend Fashion <br />
                                    Collection
                                </h2>
                                <p>Up to 30% off selected Product</p>
                                <a href="shop-grid.html" class="btn btn-lg btn-primary btn-hover-dark">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Slider Container End -->

                </div>
                <!-- Single Hero Slider Item End -->
            </div>

            <!-- Swiper Pagination Start -->
            <div class="swiper-pagination d-md-none"></div>
            <!-- Swiper Pagination End -->

            <!-- Swiper Navigation Start -->
            <div class="home-slider-prev swiper-button-prev main-slider-nav d-md-flex d-none"><i
                    class="pe-7s-angle-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav d-md-flex d-none"><i
                    class="pe-7s-angle-right"></i></div>
            <!-- Swiper Navigation End -->

        </div>
    </div>
</div>
<!-- Hero/Intro Slider End -->

<!-- Product Section Start -->
<div class="section section-padding mt-0">
    <div class="container">
        <!-- Section Title & Tab Start -->
        <div class="row">
            <!-- Tab Start -->
            <div class="col-12">
                <ul class="product-tab-nav nav justify-content-center mb-10 title-border-bottom mt-n3">
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="300"><a class="nav-link active mt-3"
                            data-bs-toggle="tab" href="#tab-product-all">Sản phẩm mới</a></li>
                    <li class="nav-item" data-aos="fade-up" data-aos-delay="400"><a class="nav-link mt-3"
                            data-bs-toggle="tab" href="#tab-product-clothings">Bán chạy nhất</a></li>
                    <!-- <li class="nav-item" data-aos="fade-up" data-aos-delay="500"><a class="nav-link mt-3" data-bs-toggle="tab" href="#tab-product-all">Sale Items</a></li> -->
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <!-- Section Title & Tab End -->

        <!-- Products Tab Start -->
        <div class="row">
            <div class="col">
                <div class="tab-content position-relative">
                    <div class="tab-pane fade show active" id="tab-product-all">
                        <div class="product-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php foreach ($all_sp_new as $sp) { $thumb = $thumb = explode(',', $sp['anh_sp']); ?>
                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper">
                                            <!-- Single Product Start -->
                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="?act=product&id=<?= $sp['id'] ?>" class="image">
                                                        <img class="first-image w-100" style="height: 440px" src="upload/<?= $thumb[0] ?>"
                                                            alt="Product" />
                                                    </a>
                                                    <!-- <div class="actions">
                                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i
                                                                class="pe-7s-like"></i></a>
                                                        <a href="#" title="Quickview" class="action quickview"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                                                class="pe-7s-search"></i></a>
                                                    </div> -->
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a href="<?=$sp['id']?>"><?=$sp['ten_sp']?></a></h5>
                                                    <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new"><?= number_format($sp['gia_sp']) ?> VNĐ</span>
                                                        <!-- <span class="old">$42.85</span> -->
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To
                                                        Cart</button>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Product End -->
                                    <?php } ?>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div
                                    class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                    <i class="pe-7s-angle-right"></i></div>
                                <div
                                    class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                    <i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-product-clothings">
                        <div class="product-carousel">
                            <div class="swiper-container">
                            <div class="swiper-wrapper">
                                    <?php foreach ($all_bestseller as $sp) { $thumb = $thumb = explode(',', $sp['anh_sp']); ?>
                                        <!-- Product Start -->
                                        <div class="swiper-slide product-wrapper">
                                            <!-- Single Product Start -->
                                            <div class="product product-border-left mb-10">
                                                <div class="thumb">
                                                    <a href="?act=product&id=<?= $sp['id'] ?>" class="image">
                                                        <img class="first-image w-100" style="height: 440px" src="upload/<?= $thumb[0] ?>"
                                                            alt="Product" />
                                                    </a>
                                                    <!-- <div class="actions">
                                                        <a href="wishlist.html" title="Wishlist" class="action wishlist"><i
                                                                class="pe-7s-like"></i></a>
                                                        <a href="#" title="Quickview" class="action quickview"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                                                class="pe-7s-search"></i></a>
                                                    </div> -->
                                                </div>
                                                <div class="content">
                                                    <h5 class="title"><a href="<?=$sp['id']?>"><?=$sp['ten_sp']?></a></h5>
                                                    <span class="ratings">
                                                        <span class="rating-wrap">
                                                            <span class="star" style="width: 100%"></span>
                                                        </span>
                                                        <span class="rating-num">(4)</span>
                                                    </span>
                                                    <span class="price">
                                                        <span class="new"><?= number_format($sp['gia_sp']) ?> VNĐ</span>
                                                        <!-- <span class="old">$42.85</span> -->
                                                    </span>
                                                    <button class="btn btn-sm btn-outline-dark btn-hover-primary">Add To
                                                        Cart</button>
                                                </div>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Product End -->
                                    <?php } ?>
                                </div>

                                <!-- Swiper Pagination Start -->
                                <div class="swiper-pagination d-md-none"></div>
                                <!-- Swiper Pagination End -->

                                <!-- Next Previous Button Start -->
                                <div
                                    class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                                    <i class="pe-7s-angle-right"></i></div>
                                <div
                                    class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                                    <i class="pe-7s-angle-left"></i></div>
                                <!-- Next Previous Button End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Tab End -->
    </div>
</div>
<!-- Product Section End -->

<!-- Banner Fullwidth Start -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner">
                    <div class="banner-image">
                        <a href="shop-grid.html"><img src="assets/images/banner/big-banner.jpg" alt="Banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Fullwidth End -->

<!-- Feature Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="feature-wrap">
            <div class="row row-cols-lg-4 row-cols-xl-auto row-cols-sm-2 row-cols-1 justify-content-between mb-n5">
                <!-- Feature Start -->
                <div class="col mb-5">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-2.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Free Shipping</h5>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->

                <!-- Feature Start -->
                <div class="col mb-5">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-3.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Support 24/7</h5>
                            <p>Support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->
                <!-- Feature Start -->
                <div class="col mb-5">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-4.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Money Return</h5>
                            <p>Back guarantee under 5 days</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->

                <!-- Feature Start -->
                <div class="col mb-5">
                    <div class="feature">
                        <div class="icon text-primary align-self-center">
                            <img src="assets/images/icons/feature-icon-1.png" alt="Feature Icon">
                        </div>
                        <div class="content">
                            <h5 class="title">Order Discount</h5>
                            <p>Onevery order over $150</p>
                        </div>
                    </div>
                </div>
                <!-- Feature End -->
            </div>
        </div>
    </div>
</div>
<!-- Feature Section End -->