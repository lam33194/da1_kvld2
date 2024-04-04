<main>
    <h2 align="center">Chi tiết đơn hàng</h2><br>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày tạo</th>
                    <th>Lần cập nhật gần nhất</th>
                    <th>Trạng thái giao hàng</th>
                    <th>Trạng thái thanh toán</th>
                    <th>PTTT</th>
                    <th>Tổng tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?= $ct_donhang['id_dh'] ?>
                    </td>
                    <td>
                        <?= $ct_donhang['created_at'] ?>
                    </td>
                    <td>
                        <?= $ct_donhang['updated_at'] ?>
                    </td>
                    <td>
                        <?php switch ($ct_donhang['status_delivery']) {
                            // 0: chờ xác nhận 1: chờ giao hàng 2: đã giao -1: đã hủy
                            case '0':
                                echo 'Chờ xác nhận';
                                break;
                            case '1':
                                echo 'Chờ giao hàn';
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

                    <td>
                        <?php switch ($ct_donhang['status_payment']) {
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
                        }
                        ?>
                    <td>
                        <?= $ct_donhang['pttt'] == 0 ? "Thanh toán trực tiếp" : "Thanh toán online" ?>
                    </td>
                    <td>
                        <?= number_format($ct_donhang['total_bill']) ?> VNĐ
                    </td>
                    <td><?php switch($ct_donhang['status_delivery']) {
                        case 0:
                            echo "<a href='?act=ql_donhang&confirm_id=".$ct_donhang['id_dh']."'>Xác nhận</a>";
                            break;
                        case 1:
                            echo "<a href='?act=ql_donhang'>Hủy đơn hàng</a>";
                            break;
                        case 2:
                            echo "<p style='font-size: 20px'>✅</p>";
                            break;
                        default:
                            echo "<p style='font-size: 20px'>❌</p>";
                        break;
                    }
                    ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>
    <hr>
    <br>

    <h2 align="center">Người đặt</h2><br>
    <div class="table">
        <table>
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
                    <td>
                        <?= $ct_donhang['user_name'] ?>
                    </td>
                    <td>
                        <?= $ct_donhang['user_email'] ?>
                    </td>
                    <td>
                        <?= $ct_donhang['user_phone'] ?>
                    </td>
                    <td>
                        <?= $ct_donhang['user_address'] ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>
    <hr>
    <br>
    <h2 align="center">Thông tin sản phẩm</h2><br>

    <div class="table">
        <table>
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
                <?php
                foreach ($all_sp as $sp) {
                    extract($sp);
                    $anh_sp = explode(',', $anh_sp)[0];
                    echo '
                        <tr>
                            <td>' . $ten_sp . '</td>
                            <td> <img src="../upload/' . $anh_sp . '" width="140px" height="180px"> </td>
                            <td>' . number_format($price) . ' VNĐ</td>
                            <td>' . $so_luong . '</td>
                            <td>' . number_format($so_luong * $price) . ' VNĐ</td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

</main>

<!-- <td>'.$soluong.'</td> -->