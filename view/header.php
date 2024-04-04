<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmldemo.net/destry/destry/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2024 19:02:41 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Destry - Fashion eCommerce HTML Template</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Vendor CSS (Icon Font) -->

    <link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.min.css">


    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />


    <!-- Main Style CSS -->


    <link rel="stylesheet" href="assets/css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="header section">
        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky shadow-sm">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-logo">
                                <a href="index.php"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-xl-8 d-none d-xl-block">
                            <div class="main-menu position-relative">
                                <ul>
                                    <li>
                                        <a href="index.php"><span>Home</span></a>
                                    </li>
                                    <li class="has-children position-static">
                                        <a href="?act=shop"><span>Shop</span></a>
                                    </li>
                                    <li><a href="about.html"><span>About us</span></a></li>
                                    <li><a href="?act=contact"> <span>Contact</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-actions">
                                <!-- Search Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-search"><i
                                        class="pe-7s-search"></i></a>
                                <!-- Search Header Action Button End -->

                                <!-- User Account Header Action Button Start -->
                                <?php if (isset($_SESSION['user'])) { ?>
                                    <a href="?act=myAccount" class="header-action-btn d-none d-md-block"><i
                                            class="pe-7s-user"></i></a>
                                <?php } else { ?>
                                    <a href="?act=dangnhap" class="header-action-btn d-none d-md-block"><i
                                            class="pe-7s-user"></i></a>
                                <?php } ?>
                                <!-- User Account Header Action Button End -->

                                <!-- Wishlist Header Action Button Start -->
                                <a href="wishlist.html"
                                    class="header-action-btn header-action-btn-wishlist d-none d-md-block">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Wishlist Header Action Button End -->

                                <!-- Shopping Cart Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                    <i class="pe-7s-shopbag"></i>
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <span class="header-action-num">
                                            <?= count($cart_items) ?>
                                        </span>
                                    <?php } else { ?>
                                        <span class="header-action-num">0</span>
                                    <?php } ?>
                                </a>
                                <!-- Shopping Cart Header Action Button End -->

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)"
                                    class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li>
                                <a href="index.php"><span>Home</span></a>
                            </li>
                            <li class="has-children position-static">
                                <a href="?act=shop"><span>Shop</span></a>
                            </li>
                            <li><a href="about.html"><span>About us</span></a></li>
                            <li><a href="contact.html"> <span>Contact</span></a></li>
                        </ul>

                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789 123</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

        <!-- Offcanvas Search Start -->
        <div class="offcanvas-search">
            <div class="offcanvas-search-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Start -->
                <form class="offcanvas-search-form d-flex" action="" method="get">
                    <input type="hidden" name="act" value="shop">
                    <input type="text" placeholder="Search Here..." class="offcanvas-search-input px-3"
                        name="searchKey">
                    <input type="submit" value="Tìm" class="btn btn-dark btn-hover-primary rounded-0 w-50">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
        </div>
        <!-- Offcanvas Search End -->

        <!-- Cart Offcanvas Start -->
        <div class="cart-offcanvas-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Cart Offcanvas Inner Start -->
            <div class="cart-offcanvas-inner">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <div class="offcanvas-cart-content text-center">

                        <!-- Button Close Start -->
                        <div class="offcanvas-btn-close">
                            <i class="pe-7s-close"></i>
                        </div>
                        <!-- Button Close End -->

                        <!-- Offcanvas Cart Title Start -->
                        <h2 class="offcanvas-cart-title m-5 p-4 text-white bg-danger">Vui lòng đăng nhập để sử dụng tính
                            năng này !</h2>
                        <a href="?act=dangnhap"><button type="button"
                                class="btn btn-dark btn-hover-primary rounded-0 m-3 w-50" name="signin">Đăng
                                nhập</button></a> <!-- Offcanvas Cart Title End -->
                        <a href="?act=dangky"><button type="button"
                                class="btn btn-dark btn-hover-primary rounded-0 m-3 w-50" name="signin">Đăng ký</button></a>
                        <!-- Offcanvas Cart Title End -->
                        <!-- Offcanvas Cart Title End -->

                    </div>
                <?php } else { ?>

                    <!-- Button Close Start -->
                    <div class="offcanvas-btn-close">
                        <i class="pe-7s-close"></i>
                    </div>
                    <!-- Button Close End -->

                    <!-- Offcanvas Cart Content Start -->
                    <div class="offcanvas-cart-content">
                        <!-- Offcanvas Cart Title Start -->
                        <h2 class="offcanvas-cart-title mb-10">Giỏ hàng</h2>
                        <!-- Offcanvas Cart Title End -->

                        <?php foreach ($cart_items as $item) {
                            $anh = explode(',', $item['anh_sp']) ?>
                            <!-- Cart Product/Price Start -->
                            <div class="cart-product-wrapper mb-6">
                                <!-- Single Cart Product Start -->
                                <div class="single-cart-product">
                                    <div class="cart-product-thumb">
                                        <a href="?act=product&id=<?=$item['id_sp']?>"><img src="upload/<?= $anh[0] ?>" alt="Cart Product"></a>
                                    </div>
                                    <div class="cart-product-content">
                                        <h3 class="title"><a href="?act=product&id=<?=$item['id_sp']?>">
                                                <?= $item['ten_sp'] ?>
                                            </a></h3>
                                        <span class="price">
                                            <span class="new">
                                                <?= number_format($item['gia_sp']) ?> VNĐ
                                            </span>
                                            <!-- <span class="old">$40.00</span> -->
                                        </span>
                                        <span class="">
                                            <span class="new">Số lượng:
                                                <?= $item['so_luong'] ?>
                                            </span>
                                            <!-- <span class="old">$40.00</span> -->
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Cart Product End -->

                                <!-- Product Remove Start -->
                                <div class="cart-product-remove">
                                    <a href="#"><i class="fa fa-trash"></i></a>
                                </div>
                                <!-- Product Remove End -->
                            </div>
                            <!-- Cart Product/Price End -->
                        <?php } ?>

                        <?php if (count(check_cart_null($id_gh)) > 0) { ?>

                        <!-- Cart Product Total Start -->
                        <div class="cart-product-total">
                            <span class="value">Tổng</span>
                            <span class="price">
                                <?php
                                $sum = 0;
                                foreach ($cart_items as $item) {
                                    $sum += $item['gia_sp'] * $item['so_luong'];
                                }
                                print_r(number_format($sum));
                                ?>
                                VNĐ
                            </span>
                        </div>
                        <!-- Cart Product Total End -->

                        <!-- Cart Product Button Start -->
                        <div class="cart-product-btn mt-4">
                                <a href="?act=cart" class="btn btn-dark btn-hover-primary rounded-0 w-100">Xem giỏ
                                    hàng</a>
                                <a href="?act=checkout" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Thanh
                                    toán</a>
                            <?php } else {
                                echo 'Giỏ hàng của bạn đang trống !';
                                echo '<a href="?act=checkout" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Mua sắm ngay</a>';
                            }?>
                            <!-- <button class=""></button> -->
                        </div>
                        <!-- Cart Product Button End -->

                    </div>
                    <!-- Offcanvas Cart Content End -->
                <?php } ?>
            </div>
            <!-- Cart Offcanvas Inner End -->
        </div>
        <!-- Cart Offcanvas End -->

    </div>