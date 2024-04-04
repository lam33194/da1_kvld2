<!-- Checkout Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row mb-n4">
            <div class="col-lg-6 col-12 mb-4">

                <!-- Checkbox Form Start -->
                <div class="checkbox-form">
                    <!-- Checkbox Form Title Start -->
                    <h3 class="title">Thông tin người đặt hàng</h3>
                    <!-- Checkbox Form Title End -->

                    <div class="row">
                        <!-- Company Name Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label class="fw-bold">Người đặt hàng</label>
                                <input disabled class="fw-light" value="<?= $ho_va_ten ?>" type="text">
                            </div>
                        </div>
                        <!-- Company Name Input End -->

                        <!-- Address Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label class="fw-bold">Địa chỉ giao hàng</label>
                                <input disabled class="fw-light" value="<?= $dia_chi ?>" type="text">
                            </div>
                        </div>

                        <!-- Address Input End -->

                        <!-- Email Address Input Start -->
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label class="fw-bold">Email</label>
                                <input disabled class="fw-light" value="<?= $email ?>" type="email">
                            </div>
                        </div>
                        <!-- Email Address Input End -->

                        <!-- Email Address Input Start -->
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label class="fw-bold">Số điện thoại</label>
                                <input disabled class="fw-light" value="<?= $sdt ?>" type="text">
                            </div>
                        </div>
                        <!-- Email Address Input End -->
                    </div>
                </div>

                <!-- Checkbox Form End -->
            </div>
            <div class="col-lg-6 col-12 mb-4">
                <div class="cart-calculator-wrapper">
                    <!-- Checkbox Form Start -->

                    <div class="checkbox-form">
                        <!-- Checkbox Form Title Start -->
                        <h3 class="title">Thông tin đơn hàng</h3>
                        <!-- Checkbox Form Title End -->

                        <!-- Cart Calculate Items Start -->
                        <div class="cart-calculate-items">

                            <!-- Responsive Table Start -->
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Mã đơn hàng</td>
                                        <td>
                                            <?=$order['id']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đặt</td>
                                        <td>
                                            <?=$order['created_at']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phương thức thanh toán</td>
                                        <td>
                                            <?= ($order['pttt']==0)?'Thanh toán khi nhận hàng':'VNPay' ?>
                                        </td>
                                    </tr>
                                    
                                    <tr class="total">
                                        <td>Tổng thanh toán</td>
                                        <td class="total-amount">
                                            <?=number_format($order['total_bill'])?> VNĐ
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Responsive Table End -->

                        </div>
                        <!-- Cart Calculate Items End -->
                    </div>

                    <!-- Checkbox Form End -->
                </div>
                <!-- Cart Checktout Button Start -->
                <a href="?act=shop" class="btn btn-dark btn-hover-primary rounded-0 w-100">Tiếp tục mua sắm</a>
                    <!-- Cart Checktout Button End -->
            </div>
        </div>

        <h3 class="title text-center fw-bold my-5">Thông tin sản phẩm</h3>

        <div class="row">
            <div class="col-12">
                <form action="" method="post">

                    <!-- Cart Table Start -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">

                            <!-- Table Head Start -->
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">Quantity</th>
                                    <th class="pro-subtotal">Total</th>
                                </tr>
                            </thead>
                            <!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                <?php
                                foreach ($cart_items as $item) {
                                    $anh = explode(',', $item['anh_sp']);
                                    $sum += $item['so_luong'] * $item['gia_sp'];
                                    ?>
                                    <tr>
                                        <input type="hidden" name="id_sp[<?= $item['id_mh'] ?>]"
                                            value="<?= $item['id_sp'] ?>">
                                        <td class="pro-thumbnail">
                                            <a href="#"><img class="img-fluid" style="max-height: 180px;"
                                                    src="upload/<?= $anh[0] ?>" alt="Product" /></a>
                                        </td>
                                        <td class="pro-title"><a href="#">
                                                <?= $item['ten_sp'] ?>
                                        </td>
                                        <td class="pro-price"><span class="priceOri">
                                                <?= number_format($item['gia_sp']) ?> VNĐ
                                            </span></td>
                                        <td class="pro-quantity">
                                            <div class="d-flex justify-content-center">
                                                <?= $item['so_luong'] ?>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span class="spanTotal">
                                                <?= number_format($item['so_luong'] * $item['gia_sp']) ?> VNĐ
                                            </span></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <!-- Table Body End -->

                        </table>
                    </div>
                    <!-- Cart Table End -->
                </form>
            </div>
        </div>


    </div>
</div>