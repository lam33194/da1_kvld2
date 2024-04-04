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
                                <input disabled class="fw-light" value="<?= $order['user_name'] ?>" type="text">
                            </div>
                        </div>
                        <!-- Company Name Input End -->

                        <!-- Address Input Start -->
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label class="fw-bold">Địa chỉ giao hàng</label>
                                <input disabled class="fw-light" value="<?= $order['user_address'] ?>" type="text">
                            </div>
                        </div>

                        <!-- Address Input End -->

                        <!-- Email Address Input Start -->
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label class="fw-bold">Email</label>
                                <input disabled class="fw-light" value="<?= $order['user_email'] ?>" type="email">
                            </div>
                        </div>
                        <!-- Email Address Input End -->

                        <!-- Email Address Input Start -->
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label class="fw-bold">Số điện thoại</label>
                                <input disabled class="fw-light" value="<?= $order['user_phone'] ?>" type="text">
                            </div>
                        </div>
                        <!-- Email Address Input End -->
                    </div>
                </div>


<?php if ($order['pttt'] == 1) {?>
<a href="" class="btn btn-dark btn-hover-primary rounded-0 w-100">Thanh toán</a>
<?php }?>

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
                                            <?=$order['id_dh']?>
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
                                    <tr>
                                        <td>Trạng thái đơn hàng</td>
                                        <td>
                                            <?php
                                            switch($order['status_delivery']){ 
                                                // 0: chờ xác nhận 1: chờ giao hàng 2: đã giao -1: đã hủy
                                                case '0':
                                                    echo 'Chờ xác nhận';
                                                break;
                                                case '1':
                                                    echo 'Chờ giao hàng';
                                                break;
                                                case '2':
                                                    echo 'Đã giao';
                                                break;
                                                case '-1':
                                                    echo 'Đơn đã hủy';
                                                break;
                                            }
                                            ?>
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
                                foreach ($order_items as $item) {
                                    $anh = explode(',', $item['anh_sp']);
                                    ?>
                                    <tr>
                                        <td class="pro-thumbnail">
                                            <a href="#"><img class="img-fluid" style="max-height: 180px;"
                                                    src="upload/<?= $anh[0] ?>" alt="Product" /></a>
                                        </td>
                                        <td class="pro-title"><a href="#">
                                                <?= $item['ten_sp'] ?>
                                        </td>
                                        <td class="pro-price"><span class="priceOri">
                                                <?= number_format($item['price']) ?> VNĐ
                                            </span></td>
                                        <td class="pro-quantity">
                                            <div class="d-flex justify-content-center">
                                                <?= $item['so_luong'] ?>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span class="spanTotal">
                                                <?= number_format($item['so_luong'] * $item['price']) ?> VNĐ
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