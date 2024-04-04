<main>
    <div class="title">
        <h1>Quản lý tài khoản</h1>
    </div>
    <div class="search_add">
        <form action="">
            <input type="text" placeholder="Search something...">
            <input type="submit"  value="Tìm">
        </form>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($all_taikhoan as $taikhoan) {
                        extract($taikhoan);
                        echo'
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$ho_va_ten.'</td>
                            <td>'.$email.'</td>
                            <td>'.$sdt.'</td>
                            <td>'.$dia_chi.'</td>'; ?>
                            <td><?php switch($role){ 
                            // 0: chờ xác nhận 1: chờ giao hàng 2: đã giao -1: đã hủy
                            case '-1':
                                echo 'Đang bị cấm';
                            break;
                            case '1':
                                echo 'User';
                            break;
                            case '0':
                                echo 'Admin';
                            break;
                            } 
                            echo '</td><td class="thaotac">
                            <a href="?act=ql_taikhoan&block_user='.$id.'" onclick="return confirm(\'Chặn người dùng '.$username.' ?\');">❌</a>
                            </td>
                            </tr>';
                        }
                        ?>
            </tbody>
        </table>
    </div>
</main>

<!-- <td>'.$soluong.'</td> -->