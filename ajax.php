<?php
include 'model/pdo.php';
include 'model/binhluan.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_sp = $_POST['id_sp'];
    $id_user = $_POST['id_user'];
    $noidung_bl = $_POST['noi_dung'];
    add_binhluan($id_sp, $id_user, $noidung_bl);
}
$bl = load_all_binhluan_sp($id_sp)[0];
?>

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
            <p><?=$noidung_bl?></p>
        </div>
        <!-- Review Details End -->
    </div>
    <!-- End Single Review -->
