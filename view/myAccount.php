<!-- Breadcrumb Section Start -->
<div class="section">
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">My Account</h1>
                <ul>
                    <li>
                        <a href="index.html">Home </a>
                    </li>
                    <li class="active">My Account</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- My Account Section Start -->
<div class="section section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#account-info" class="active" data-bs-toggle="tab"><i class="fa fa-user">
                                    </i>Thông tin tài khoản</a>
                                <?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 0) { ?>
                                    <a href="admin/index.php" target="_blank"><i class="fa fa-dashboard"></i>Trang quản
                                        trị</a>
                                <?php } ?>

                                <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"> </i>Lịch sử</a>
                                <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card">
                                    </i>PaymentMethod</a>
                                <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker">
                                    </i>address</a>
                                <a href="?act=logout"> <i class="fa fa-sign-out"> </i>Đăng xuất</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Orders</h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Mã đơn hàng</th>
                                                        <th>Thời gian</th>
                                                        <th>TT giao hàng</th>
                                                        <th>TT thanh toán</th>
                                                        <th>Tổng thanh toán</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($my_orders as $order) { ?>
                                                        <tr>
                                                            <td>
                                                                <?= $order['id'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $order['created_at'] ?>
                                                            </td>
                                                            <td>
                                                                <?php switch ($order['status_delivery']) {
                                                                    // 0: chờ xác nhận 1: chờ giao hàng 2: đã giao -1: đã hủy
                                                                    case '0':
                                                                        echo '<span>Chờ xác nhận</span>';
                                                                    break;
                                                                    case '1':
                                                                        echo '<span class="text-warning">Chờ giao hàng</span>';
                                                                    break;
                                                                    case '2':
                                                                        echo '<span class="text-success">Đã giao</span>';
                                                                    break;
                                                                    case '-1':
                                                                        echo '<span class="text-danger">Đơn đã hủy</span>';
                                                                    break;
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                switch ($order['status_payment']) {
                                                                    // 0: chưa thanh toán 1: đã thanh toán -1: đơn hàng đã hủy
                                                                    case '0':
                                                                        echo 'Chưa thanh toán';
                                                                        break;
                                                                    case '1':
                                                                        echo 'Đã thanh toán';
                                                                        break;
                                                                    case '-1':
                                                                        echo 'Đơn hàng đã hủy';
                                                                        break;
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?= number_format($order['total_bill']) ?> VNĐ
                                                            </td>
                                                            <td>
                                                                <a href="?act=myOrder&id_dh=<?= $order['id'] ?>"
                                                                    class="btn btn btn-dark btn-hover-primary btn-sm rounded-0 mb-1 w-100">Chi tiết</a>
                                                                <br>
                                                                <?php if($order['status_payment'] == -1 || $order['status_delivery'] == -1) {?>
                                                                    <a onclick="return confirm('Hủy đơn hàng ?')" href="?act=myAccount&huy_id_dh=<?= $order['id'] ?>"
                                                                    class="btn btn btn-dark btn-hover-primary btn-sm rounded-0 w-100">Hủy đặt hàng</a>
                                                                <?php } else if($order['status_delivery'] == 1) { ?>
                                                                    <a href="?act=myAccount&success_order=<?= $order['id'] ?>"
                                                                    class="btn btn btn-dark btn-hover-primary btn-sm rounded-0 mb-1 w-100">Đã nhận hàng</a>
                                                                    <?php } ?>

                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Payment Method</h3>
                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Aya</strong></p>
                                            <p>1234 Market ##, Suite 900 <br>
                                                Lorem Ipsum, ## 12345</p>
                                            <p>Mobile: (123) 123-456789</p>
                                        </address>
                                        <a href="#" class="btn btn btn-dark btn-hover-primary rounded-0"><i
                                                class="fa fa-edit me-2"></i>Edit Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3 class="title">Account Details</h3>
                                        <div class="account-details-form">
                                            <form action="" method="post">
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required fw-bold mb-1">Họ và
                                                        tên</label>
                                                    <input class="fw-light" type="text" id="display-name"
                                                        name="ho_va_ten" value="<?= $current_user['ho_va_ten'] ?>"
                                                        placeholder="Họ và tên" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item mb-3">
                                                            <label for="email"
                                                                class="required fw-bold mb-1">Email</label>
                                                            <input class="fw-light" type="email" id="email" name="email"
                                                                value="<?= $current_user['email'] ?>"
                                                                placeholder="example@gmail.com" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item mb-3">
                                                            <label for="sdt" class="required fw-bold mb-1">Số điện
                                                                thoại</label>
                                                            <input class="fw-light" type="tel" id="sdt" name="sdt"
                                                                value="<?= $current_user['sdt'] ?>"
                                                                placeholder="012346789" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required fw-bold mb-1">Địa chỉ</label>
                                                    <input class="fw-light" type="text" id="email" name="dia_chi"
                                                        value="<?= $current_user['dia_chi'] ?>" placeholder="Địa chỉ" />
                                                </div>
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item mb-3">
                                                        <label for="current-pwd" class="required fw-bold mb-1">Current
                                                            Password</label>
                                                        <input class="fw-light" type="password" id="current-pwd"
                                                            placeholder="Current Password" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="new-pwd" class="required fw-bold mb-1">New
                                                                    Password</label>
                                                                <input class="fw-light" type="password" id="new-pwd"
                                                                    placeholder="New Password" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item mb-3">
                                                                <label for="confirm-pwd"
                                                                    class="required fw-bold mb-1">Confirm
                                                                    Password</label>
                                                                <input class="fw-light" type="password" id="confirm-pwd"
                                                                    placeholder="Confirm Password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item single-item-button">
                                                    <button name="acc_submit" type="submit"
                                                        class="btn btn btn-dark btn-hover-primary rounded-0">Save
                                                        Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div>
                <!-- My Account Page End -->

            </div>
        </div>

    </div>
</div>
<!-- My Account Section End -->