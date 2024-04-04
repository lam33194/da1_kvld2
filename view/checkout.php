    <!-- Breadcrumb Section Start -->
    <div class="section">

        <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-light">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h1 class="title">Checkout</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li class="active"> Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

    </div>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Start -->
    <div class="section section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Coupon Accordion Start -->
                    <div class="coupon-accordion">
                        <!-- Title Start -->
                        <h3 class="title">Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <!-- Title End -->

                        <!-- Checkout Coupon Start -->
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon d-flex">
                                        <input placeholder="Coupon code" type="text">
                                        <input class="btn btn-dark btn-hover-primary rounded-0" value="Apply Coupon" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- Checkout Coupon End -->

                    </div>
                    <!-- Coupon Accordion End -->
                </div>
            </div>
            <div class="row mb-n4">
                <div class="col-lg-6 col-12 mb-4">

                    <!-- Checkbox Form Start -->
                    <form action="?act=billconfirm" method="post">
                        <div class="checkbox-form">

                            <!-- Checkbox Form Title Start -->
                            <h3 class="title">Billing Details</h3>
                            <!-- Checkbox Form Title End -->

                            <div class="row">
                                <!-- Company Name Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label class="fw-bold">Họ và tên</label>
                                        <input class="fw-light" name="ho_va_ten" value="<?=$current_user['ho_va_ten']?>" placeholder="Họ và tên" type="text">
                                    </div>
                                </div>
                                <!-- Company Name Input End -->

                                <!-- Address Input Start -->
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label class="fw-bold">Địa chỉ</label>
                                        <input class="fw-light" name="dia_chi" value="<?=$current_user['dia_chi']?>" placeholder="Số đường, ngõ, xóm" type="text">
                                    </div>
                                </div>
                                <!-- Address Input End -->

                                <!-- Email Address Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label class="fw-bold">Email</label>
                                        <input class="fw-light" name="email" value="<?=$current_user['email']?>" placeholder="example@gmail.com" type="email">
                                    </div>
                                </div>
                                <!-- Email Address Input End -->
                                
                                <!-- Email Address Input Start -->
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label class="fw-bold">Số điện thoại</label>
                                        <input class="fw-light" name="sdt" value="<?=$current_user['sdt']?>" placeholder="0123456789" type="text">
                                    </div>
                                </div>
                                <!-- Email Address Input End -->
                            </div>
                        </div>
                    <!-- Checkbox Form End -->
                </div>

                <div class="col-lg-6 col-12 mb-4">

                    <!-- Your Order Area Start -->
                    <div class="your-order-area border">

                        <!-- Title Start -->
                        <h3 class="title">Your order</h3>
                        <!-- Title End -->

                        <!-- Your Order Table Start -->
                        <div class="your-order-table table-responsive">
                            <table class="table">

                                <!-- Table Head Start -->
                                <thead>
                                    <tr class="cart-product-head">
                                        <th class="cart-product-name text-start">Sản phẩm</th>
                                        <th class="cart-product-total text-end">Tổng</th>
                                    </tr>
                                </thead>
                                <!-- Table Head End -->

                                <!-- Table Body Start -->
                                <tbody>
                                    <?php foreach($cart_items as $item) { 
                                        $sum += $item['so_luong'] * $item['gia_sp'];
                                    ?> 
                                    <tr class="cart_item">
                                        <td class="cart-product-name text-start ps-0"><?=$item['ten_sp']?><strong class="product-quantity"> ×<?=$item['so_luong']?></strong></td>
                                        <td class="cart-product-total text-end pe-0"><span class="amount"><?=number_format($item['so_luong']*$item['gia_sp'])?> VNĐ</span></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <!-- Table Body End -->

                                <!-- Table Footer Start -->
                                <tfoot>
                                    <!-- <tr class="cart-subtotal">
                                        <th class="text-start ps-0">Cart Subtotal</th>
                                        <td class="text-end pe-0"><span class="amount">£349.00</span></td>
                                    </tr> -->
                                    <tr class="order-total">
                                        <th class="text-start ps-0">Tổng đơn hàng</th>
                                        <td class="text-end pe-0">
                                            <strong><span class="amount"><?=number_format($sum)?> VNĐ</span></strong>
                                            <input type="hidden" name="total" value="<?=$sum?>">
                                        </td>
                                    </tr>
                                </tfoot>
                                <!-- Table Footer End -->

                            </table>
                        </div>
                        <!-- Your Order Table End -->

                        <!-- Payment Accordion Order Button Start -->
                        <div class="payment-accordion-order-button">
                            <div class="payment-accordion">
                                <div class="single-payment d-flex align-item-center">
                                    <h5 class="panel-title mb-3">
                                        <input class="inputRadio" id="pttt1" type="radio" name="pttt" value="0" checked>
                                        <label class="fs-6" for="pttt1">Thanh toán khi nhận hàng</label>
                                    </h5>
                                </div>
                                <div class="single-payment d-flex align-item-center">
                                    <h5 class="panel-title mb-3">
                                        <input class="inputRadio" id="pttt2" type="radio" name="pttt" value="1">
                                        <label class="fs-6" for="pttt2">VNPay</label>
                                    </h5>
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <button type="submit" name="bill_confirm" class="btn btn-dark btn-hover-primary rounded-0 w-100">Thanh toán</button>
                            </div>
                        </div>
                    </form>

                        <!-- Payment Accordion Order Button End -->
                    </div>
                    <!-- Your Order Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
    <!-- <script>
        var pttt = document.querySelectorAll('.collapse-off');
        pttt.forEach((element)=>{
            element.addEventListener(('click'),()=>{
                element.classList.toggle('collapse-on');
            })
        })
    </script> -->