<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Chi tiết đơn hàng</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <!-- <a href="?act=them_danhmuc" class="btn btn-primary">Thêm danh mục</a> -->
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="data-tables table table-striped table-bordered text-center"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày tạo</th>
                                        <th>Tổng tiền</th>
                                        <th>PTTT</th>
                                        <th>Trạng thái giao hàng</th>
                                        <th>Trạng thái thanh toán</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $ct_donhang['id_dh'] ?></td>
                                        <td><?= $ct_donhang['created_at'] ?></td>
                                        <td><?= number_format($ct_donhang['total_bill']) ?> VNĐ</td>
                                        <td><?= $ct_donhang['pttt'] == 0 ? "Thanh toán trực tiếp" : "Thanh toán online" ?></td>
                                        <td><?php switch ($ct_donhang['status_delivery']) {
                                            // 0: chưa xác nhận 1: đã xác nhận 2: chờ giao hàng 3: đã giao hàng -1: đã hủy
                                            case '0':
                                                echo 'Chưa xác nhận';
                                                break;
                                            // case '1':
                                            //     echo 'Chờ đơn vị vận chuyển';
                                            // break;
                                            case '1':
                                                echo 'Đang giao hàng';
                                                break;
                                            case '2':
                                                echo 'Đã giao hàng';
                                                break;
                                            case '3':
                                                echo 'Đã giao hàng';
                                                break;
                                            case '-1':
                                                echo 'Đơn đã hủy';
                                                break;
                                        } ?>
                                        </td>

                                        <td><?php switch ($ct_donhang['status_payment']) {
                                            // 0: chưa thanh toán 1: đã thanh toán -1: đơn hàng đã hủy
                                            case '0':
                                                echo 'Chưa thanh toán';
                                                break;
                                            case '1':
                                                echo 'Đã thanh toán';
                                                break;
                                            case '-1':
                                                echo 'Đơn đã hủy';
                                                break;
                                        } ?>
                                        </td>
                                        <td>
                                            <?php
                                            switch ($ct_donhang['status_delivery']) {
                                                case '0':
                                                    echo "<a href='?act=ql_donhang&confirm_id=" . $ct_donhang['id_dh'] . "'>Xác nhận</a>"; //xác nhận đơn
                                                    break;
                                                case '1':
                                                    echo "Đã xác nhận";
                                                    break;
                                                case '2':
                                                    if ($ct_donhang['status_payment'] == 1)
                                                        echo "<a href='?act=ql_donhang&success_id=" . $ct_donhang['id_dh'] . "'>Hoàn thành</a>";
                                                    else
                                                        break;
                                                    break;
                                                case '3':
                                                    echo "Đã hoàn thành";
                                                    break;
                                                case '-1':
                                                    echo "<span class='text-danger'>Đơn đã hủy</span>";
                                                    break;
                                            } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Chi tiết người đặt</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <!-- <a href="?act=them_danhmuc" class="btn btn-primary">Thêm danh mục</a> -->
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="data-tables table table-striped table-bordered text-center"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Họ và tên</th>
                                        <th>Email</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ giao hàng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $ct_donhang['user_name'] ?></td>
                                        <td><?= $ct_donhang['user_email'] ?></td>
                                        <td><?= $ct_donhang['user_phone'] ?></td>
                                        <td><?= $ct_donhang['user_address'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Thông tin sản phẩm</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <!-- <a href="?act=them_danhmuc" class="btn btn-primary">Thêm danh mục</a> -->
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="data-tables table table-striped table-bordered text-center"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Thumbnail</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ct_sp as $sp) {
                                        $anh_sp = explode(',', $sp['anh_sp'])[0];?>
                                    <tr>
                                        <td> <?=$sp['ten_sp']?></td>
                                        <td> <img src="../upload/<?=$anh_sp?>" width="140px" height="180px"> </td>
                                        <td> <?= number_format($sp['price'])?> VNĐ</td>
                                        <td> <?=$sp['so_luong']?></td>
                                        <td> <?= number_format($sp['so_luong'] * $sp['price'])?> VNĐ</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
