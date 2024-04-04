<main>
    <div class="title">
        <h1>Quản lý đơn hàng</h1>
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
                    <th>ID đơn hàng</th>
                    <th>Thông tin khách hàng</th>
                    <th>Thông tin đơn hàng</th>
                    <th>Trạng thái giao hàng</th>
                    <th>Trạng thái thanh toán</th>
                    <th>Hành động</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_donhang as $donhang) {
                    extract($donhang); ?>
                    <tr>
                        <td><?=$id_donhang?></td>
                        
                        <td class="huh">
                            Tên: <?=$user_name?><br>
                            Email: <?=$user_email?><br>
                        </td>
                        
                        <td class="huh">
                            Tổng số sản phẩm: <?=$sum_sp?><br>
                            Tổng tiền: <?=number_format($total_bill)?> VNĐ 
                        </td>

                        <td><?php switch($status_delivery){ 
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

                        <td><?php switch($status_payment){
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
                        }
                        ?>
                        </td>
                        
                        <td>
                            <?php
                                switch ($status_delivery) {
                                    case 0:
                                        echo "<a href='?act=ql_donhang&confirm_id=$id_donhang'>Xác nhận</a>";
                                        break;
                                    case 1:
                                        echo "Đang vận chuyển...";
                                        break;
                                    case 2:
                                        echo "<p style='font-size: 20px'>✅</p>";
                                        break;
                                    default:
                                        echo "<p style='font-size: 20px'>❌</p>";
                                    break;
                                }  
                            ?>
                        </td>
                        <td><a href="?act=chi_tiet_donhang&id_dh=<?=$donhang['id_donhang']?>">Xem chi tiết</a></td>
                        </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>