<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Shopping Cart</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Start -->
<div class="section section-margin">
    <div class="container">
    <?php if(isset($thongbao)) echo $thongbao; else { ?>  
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
                                    <th class="pro-remove">Remove</th>
                                </tr>
                            </thead>
                            <!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                <?php
                                echo '<pre>';
                                // print_r($_POST);
                                // print_r($cart_items);
                                echo '</pre>';
                                foreach ($cart_items as $item) {
                                    $anh = explode(',', $item['anh_sp']);
                                    $sum += $item['so_luong'] * $item['gia_sp'];
                                    ?>
                                    <tr>
                                        <input type="hidden" name="id_sp[<?=$item['id_mh']?>]" value="<?=$item['id_sp']?>">
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
                                            <div class="quantity d-flex justify-content-center">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="<?= $item['so_luong'] ?>"
                                                        type="text" name="id_mh[<?= $item['id_mh'] ?>]">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="pro-subtotal"><span class="spanTotal">
                                                <?= number_format($item['so_luong'] * $item['gia_sp']) ?> VNĐ
                                            </span></td>
                                        <td class="pro-remove">
                                            <a onclick="return confirm('Xóa sản phẩm <?= $item['ten_sp'] ?> ?')"
                                                href="?act=cart&del_cart_item=<?= $item['id_sp'] ?>">
                                                <i class="pe-7s-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <!-- Table Body End -->

                        </table>
                    </div>
                    <!-- Cart Table End -->

                    <!-- Cart Update Option Start -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <!-- Apply Coupon Wrapper Start -->
                        <div class="apply-coupon-wrapper">
                            <div class=" d-block d-md-flex">
                                <input type="text" placeholder="Enter Your Coupon Code" />
                                <button class="btn btn-dark btn-hover-primary rounded-0">Dùng mã giảm giá</button>
                            </div>
                        </div>
                        <!-- Apply Coupon Wrapper End -->

                        <!-- Cart Update Start -->
                        <div class="cart-update mt-sm-16 d-flex justify-content-between gap-5">
                            <button type="submit" name="update_cart"
                                class="btn btn-dark btn-hover-primary rounded-0">Cập nhật giỏ hàng</button>
                        </div>
                        <!-- Cart Update End -->

                    </div>
                    <!-- Cart Update Option End -->

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 ms-auto col-custom">

                <!-- Cart Calculation Area Start -->
                <div class="cart-calculator-wrapper">

                    <!-- Cart Calculate Items Start -->
                    <div class="cart-calculate-items">

                        <!-- Cart Calculate Items Title Start -->
                        <h3 class="title fw-bold">Cart Totals</h3>
                        <!-- Cart Calculate Items Title End -->

                        <!-- Responsive Table Start -->
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Tổng sản phẩm</td>
                                    <td>
                                        <?= count($cart_items) ?> sản phẩm
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>Shipping</td>
                                    <td>$70</td>
                                </tr> -->
                                <tr class="total">
                                    <td>Tổng thanh toán</td>
                                    <td class="total-amount">
                                        <?= number_format($sum) ?> VNĐ
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Responsive Table End -->

                    </div>
                    <!-- Cart Calculate Items End -->

                    <!-- Cart Checktout Button Start -->
                    <a href="?act=checkout" class="btn btn-dark btn-hover-primary rounded-0 w-100">Proceed To
                        Checkout</a>
                    <!-- Cart Checktout Button End -->

                </div>
                <!-- Cart Calculation Area End -->

            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Shopping Cart Section End -->

<!-- <script>
    var price =document.querySelectorAll('.priceOri');
    var inputQty = document.querySelectorAll('.cart-plus-minus-box');
    var spanTotal = document.querySelectorAll('.spanTotal');

    for (const key in inputQty) {
        if (Object.hasOwnProperty.call(inputQty, key)) {
            const inputEle = inputQty[key];
            const pri = (parseInt(price[key].textContent)); 
            inputEle.addEventListener('change', () => {
                spanTotal[key].innerHTML = new Intl.NumberFormat().format(inputEle.value * pri * 1000) + ' VNĐ';
            })
        }
    }
</script> -->