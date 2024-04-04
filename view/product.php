<!-- Shop Section Start -->
<?php $anh = explode(',', $current_product['anh_sp']); ?>
<div class="section section-margin">
    <div class="container">

        <div class="row">
            <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">

                <!-- Product Details Image Start -->
                <div class="product-details-img">

                    <!-- Single Product Image Start -->
                    <div class="single-product-img swiper-container gallery-top text-center border border-danger ">
                        <div class="swiper-wrapper popup-gallery">
                            <?php foreach ($anh as $v) { ?>
                                <a class="swiper-slide w-100 mh-75" href="upload/<?= $v ?>">
                                    <img class="w-75" src="upload/<?= $v ?>" alt="Product">
                                </a>
                            <?php } ?>

                        </div>
                    </div>
                    <!-- Single Product Image End -->

                    <!-- Single Product Thumb Start -->
                    <div class="single-product-thumb swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <?php foreach ($anh as $v) { ?>
                                <div class="swiper-slide">
                                    <img class="w-100" src="upload/<?= $v ?>" alt="Product">
                                </div>
                            <?php } ?>
                        </div>

                        <!-- Next Previous Button Start -->
                        <div class="swiper-button-next swiper-button-white"><i class="pe-7s-angle-right"></i></div>
                        <div class="swiper-button-prev swiper-button-white"><i class="pe-7s-angle-left"></i></div>
                        <!-- Next Previous Button End -->

                    </div>
                    <!-- Single Product Thumb End -->

                </div>
                <!-- Product Details Image End -->

            </div>
            <div class="col-lg-7 col-custom">
                <!-- Product Summery Start -->
                <div class="product-summery position-relative">
                    <form action="?act=cart" method="post">
                        <input type="hidden" name="id_sp" value="<?= $current_product['id'] ?>">

                        <!-- Product Head Start -->
                        <div class="product-head mb-2">
                            <h2 class="product-title">
                                <?= $current_product['ten_sp'] ?>
                            </h2>
                        </div>
                        <!-- Product Head End -->
                        
                        <!-- Price Box Start -->
                        <div class="price-box mb-2">
                            <span class="regular-price">
                                <?= $current_product['gia_sp'] . ' VND' ?>
                            </span>
                            <!-- <span class="old-price"><del>$90.00</del></span> -->
                        </div>
                        <!-- Price Box End -->
                        
                        <!-- Rating Start -->
                        <span class="ratings justify-content-start">
                            <span>Đã bán <?=$current_product['sold']?> |</span>
                            <span class="rating-wrap ms-1">
                                <span class="star" style="width: 100%"></span>
                            </span> 
                            <span class="rating-num">(4)</span>
                        </span>
                        <!-- Rating End -->

                        <!-- Description Start -->
                        <p class="desc-content mb-5">
                            <?= nl2br($current_product['mota_sp']) ?>
                        </p>
                        <!-- Description End -->

                        <!-- Sale Countdown Start -->
                        <!-- <div class="countdown-area mb-6">
                        <div class="countdown-wrapper d-flex" data-countdown="2024/12/24"></div>
                        </div> -->
                        <!-- Sale Countdown End -->

                        <!-- Product Meta Start -->
                        <div class="product-meta mb-3">
                            <!-- Product Size Start -->
                            <!-- <div class="product-size">
                                <span>Size :</span>
                                <a href="#"><strong>S</strong></a>
                                <a href="#"><strong>M</strong></a>
                                <a href="#"><strong>L</strong></a>
                                <a href="#"><strong>XL</strong></a>
                            </div> -->
                            <!-- Product Size End -->
                        </div>
                        <!-- Product Meta End -->

                        <!-- Product Color Variation Start -->
                        <!-- <div class="product-color-variation mb-3">
                            <span>Color </span>
                            <div class="btn-group">
                                <button type="button" class="mx-1 btn bg-danger"></button>
                                <button type="button" class="mx-1 btn bg-primary"></button>
                                <button type="button" class="mx-1 btn bg-dark"></button>
                                <button type="button" class="mx-1 btn bg-success"></button>
                            </div>
                        </div> -->
                        <!-- Product Color Variation End -->

                        <!-- Quantity Start -->
                        <div class="quantity mb-5">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" value="1" type="text" name="qty">
                                <div class="dec qtybutton"></div>
                                <div class="inc qtybutton"></div>
                            </div>
                        </div>
                        <!-- Quantity End -->

                        <!-- Cart & Wishlist Button Start -->
                        <div class="cart-wishlist-btn mb-4">
                            <div class="add-to_cart">
                                <input class="btn btn-outline-dark btn-hover-primary" type="submit" value="Add to cart"
                                    name="add_to_cart"></input>
                            </div>
                            <div class="add-to-wishlist">
                                <a class="btn btn-outline-dark btn-hover-primary" href="?act=wishlist">Add to
                                    Wishlist</a>
                            </div>
                        </div>
                        <!-- Cart & Wishlist Button End -->

                        <!-- Social Shear Start -->
                        <!-- <div class="social-share">
                            <span>Share :</span>
                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                        </div> -->
                        <!-- Social Shear End -->

                        <!-- Product Delivery Policy Start -->
                        <!-- <ul class="product-delivery-policy border-top pt-4 mt-4 border-bottom pb-4">
                        <li> <i class="fa fa-check-square"></i> <span>Security Policy (Edit With Customer Reassurance
                                Module)</span></li>
                        <li><i class="fa fa-truck"></i><span>Delivery Policy (Edit With Customer Reassurance
                                Module)</span></li>
                        <li><i class="fa fa-refresh"></i><span>Return Policy (Edit With Customer Reassurance
                                Module)</span></li>
                        </ul> -->
                        <!-- Product Delivery Policy End -->
                    </form>
                </div>
                <!-- Product Summery End -->

            </div>

        </div>

        <div class="row section-margin">
            <!-- Single Product Tab Start -->
            <div class="col-lg-12 col-custom single-product-tab">
                <ul class="nav nav-tabs borber border-0" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase active fw-bold fs-4" id="profile-tab" data-bs-toggle="tab"
                            href="#connect-2" role="tab" aria-selected="false">Bình luận</a>
                    </li>
                </ul>
                <div class="tab-content mb-text" id="myTabContent">
                    <div class="tab-pane fade show active" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Start Single Content -->
                        <div class="product_tab_content  border p-3">
                            <!-- Comments ans Replay Start -->
                            <?php if (isset($_SESSION['user']) && check_user_buy($_SESSION['user']['id'], $current_product['id'])) { ?>
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">
                                            <div class="single-review d-flex mb-4">
                                                <!-- Review Thumb Start -->
                                                <div class="review_thumb">
                                                    <img class="border rounded-pill" alt="review images" src="assets/images/review/1.jpg">
                                                </div>
                                                <!-- Review Thumb End -->

                                                <!-- Review Details Start -->
                                                <div class="review_details">
                                                    <div class="review_info mb-2">
                                                        <!-- Review Title & Date Start -->
                                                        <div class="review-title-date d-flex justify-content-between">
                                                            <!-- <div class="d-flex align-items-center">
                                                            <span
                                                                class="ratings justify-content-start align-self-center m-0">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">(1)</span>
                                                            </span>
                                                        </div> -->
                                                        </div>
                                                        <!-- Review Title & Date End -->
                                                    </div>
                                                    <form action="" method="post" class="comment-form-area" id="form_comment">
                                                        <input type="hidden" value="<?=$current_product['id']?>" name="id_sp">
                                                        <input type="hidden" value="<?=$id_user?>" name="id_user">
                                                        <div class="comment-form-comment">
                                                            <textarea id="noidungbl" name="noidung_bl"
                                                                placeholder="Đăng bình luận ..." class="p-2 lh-sm"
                                                                required="required" cols="150"></textarea>
                                                        </div>
                                                        <div class="comment-form-submit text-start">
                                                            <button type="submit" name="submit_bl" disabled id="dangbl"
                                                                class="btn btn-dark btn-hover-primary p-3">Đăng</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Review Details End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="bg-secondary text-white p-2">Mua sản phẩm để thực hiện đánh giá và bình luận
                                </div>
                                <hr>
                            <?php } ?>
                            <!-- Comments ans Replay End -->                        

                            <?php foreach ($all_bl as $bl) { ?>
                                <!-- Start Single Review -->
                                <div class="single-review d-flex mb-4">
                                    <!-- Review Thumb Start -->
                                    <div class="review_thumb">
                                        <img class="border rounded-pill" alt="review images" src="assets/images/review/1.jpg">
                                    </div>
                                    <!-- Review Thumb End -->

                                    <!-- Review Details Start -->
                                    <div class="review_details">
                                        <div class="review_info mb-2">
                                            <!-- Review Title & Date Start -->
                                            <div class="review-title-date d-flex justify-content-start">
                                                <div class="review-title-date d-flex">
                                                    <h5 class="me-1"><?=$bl['ho_va_ten']?></h5><span>- <?=$bl['ngay_binh_luan']?></span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="ratings justify-content-start align-self-center m-0">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">(1)</span>
                                                </span>
                                            </div>
                                            <!-- Review Title & Date End -->

                                        </div>
                                        <p><?=$bl['noi_dung']?></p>
                                    </div>
                                    <!-- Review Details End -->

                                </div>
                                <!-- End Single Review -->
                            <?php } ?>

                            <!-- Example Single Review -->
                            <div class="single-review d-flex mb-4">
                                <!-- Review Thumb Start -->
                                <div class="review_thumb">
                                    <img class="border rounded-pill" alt="review images" src="upload/nhincc.jpeg" height="80px">
                                </div>
                                <!-- Review Thumb End -->

                                <!-- Review Details Start -->
                                <div class="review_details">
                                    <div class="review_info mb-2">
                                        <!-- Review Title & Date Start -->
                                        <div class="review-title-date d-flex justify-content-start">
                                            <div class="review-title-date d-flex">
                                                <h5 class="me-1">Admin</h5><span>- January 19, 2023</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="ratings justify-content-start align-self-center m-0">
                                                <span class="rating-wrap">
                                                    <span class="star" style="width: 100%"></span>
                                                </span>
                                                <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                        <!-- Review Title & Date End -->

                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex,
                                        vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus
                                        libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel.
                                        Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet
                                        quam tincidunt iaculis.</p>
                                </div>
                                <!-- Review Details End -->

                            </div>
                            <!-- End Example Single Review -->

                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
            <!-- Single Product Tab End -->
        </div>

        <!-- Products Start -->
        <div class="row">
            <div class="col-12">
                <!-- Section Title Start -->
                <div class="section-title aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <h2 class="title pb-3">Sản phẩm liên quan</h2>
                    <span></span>
                    <div class="title-border-bottom"></div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col">
                <div class="product-carousel">

                    <div class="swiper-container">
                    <div class="swiper-wrapper">
                                    <?php foreach ($all_sp_related as $sp) { $thumb = $thumb = explode(',', $sp['anh_sp']); ?>
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
                        <div class="swiper-product-button-next swiper-button-next swiper-button-white d-md-flex d-none">
                            <i class="pe-7s-angle-right"></i>
                        </div>
                        <div class="swiper-product-button-prev swiper-button-prev swiper-button-white d-md-flex d-none">
                            <i class="pe-7s-angle-left"></i>
                        </div>
                        <!-- Next Previous Button End -->

                    </div>

                </div>
            </div>

        </div>
        <!-- Products End -->

    </div>
</div>
<!-- Shop Section End -->

<script type="text/javascript">
    var inputSubmit = document.getElementById('dangbl');
    var inputContext = document.getElementById('noidungbl');
    inputContext.addEventListener('input', function (e) {
        if (e.target.value.trim()) inputSubmit.disabled = false;
        else inputSubmit.disabled = true;
    });

    $(document).ready(function() {
        $('#form_comment').submit(function(e){
            e.preventDefault();
                var noi_dung = $("textarea[name='noidung_bl']").val();
                var id_user = $("input[name='id_user']").val();
                var id_sp = $("input[name='id_sp']").val();
                $.ajax({
                    url: "ajax.php",
                    type: "POST",
                    data: {
                        id_user: id_user,
                        id_sp: id_sp,
                        noi_dung: noi_dung,
                    },
                    success: function(response) {
                        $('.comments-area')[0].style.display = "none";
                        $('.comments-area').after(response);
                    }
                })
        })
    });
</script>