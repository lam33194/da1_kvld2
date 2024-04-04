<?php
ob_start();
session_start();

include 'model/pdo.php';
include 'model/taikhoan.php';
include 'model/danhmuc.php';
include 'model/sanpham.php';
include 'model/binhluan.php';
include 'model/cart.php';
include 'model/donhang.php';

if (isset($_SESSION['user']) ) {
    $id_user = $_SESSION['user']['id'];
    $id_gh = current_cart($id_user)['id'];
    $cart_items = load_all_cart_item($id_user);
    $current_user = load_one_user($id_user);
}

include 'view/header.php';

// Trước khi chuyển hướng người dùng đến trang đăng nhập
// tạo biến chứa đường dẫn url $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];

// Sau khi người dùng đăng nhập thành công
// header('Location: ' . $_SESSION['redirectURL']);


if (isset ($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dangky':
            if (isset ($_POST['signup'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];

                if (validateNull($username,$password,$email,$sdt)) {

                    if (check_taikhoan_unique($email)) $thongbao_dangky = "Email này đã được đăng ký !";
                    else {
                        tao_taikhoan($username, $password, $email, $sdt);
                        $thongbao_dangky = 'Tạo tài khoản thành công';
                    } 

                } else $thongbao_dangky = "Bạn chưa điền đủ thông tin !";
            }
            include 'view/login.php';
            break;

        case 'dangnhap':
            if (isset ($_POST['signin'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if (validateNull($email, $password)) {
                    $user = check_taikhoan($email, $password);

                    if (is_array($user)) {
                        $_SESSION['user'] = $user;
                        create_cart($user['id']);

                        if (isset ($_SESSION['redirectURL'])) header('Location: ' . $_SESSION['redirectURL']);

                        else header('Location: index.php');
                        
                    } else $thongbao = $user;

                } else $thongbao = "Bạn chưa điền đủ thông tin !";
                
            }
            include 'view/login.php';
            break;
        
        case 'product': 
            $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
            
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id_sp = $_GET['id'];
                $current_product = load_one_sp($id_sp);
                
                $all_bl = load_all_binhluan_sp($id_sp);
                $all_sp_related = load_all_sp_related($current_product['iddm']);
                include 'view/product.php';
            };
            break;

        case 'shop':
            $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
            $all_sp = load_all_sp();
            $all_dm = load_all_dm_shop();

            if(isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
                $all_sp = load_all_sp_filter_dm($iddm);
            }

            if(isset($_GET['searchKey'])) {
                $keyW = $_GET['searchKey'];
                $all_sp = load_all_sp_search($keyW);
            }

            if(isset($_GET['filter_price'])){
                $from = str_replace(['.','₫'],'',$_GET['filter_price']);
                $min = strstr($from,'-',true);
                $max = substr(strstr($from,'-',false),1); 

                if (!$min || !$max) header('location: ?act=shop');
                else $all_sp = load_all_sp_filter_price($min,$max);
            }

            include 'view/shop.php';
        break;

        case 'cart':            
            if (isset($_POST['add_to_cart']) && $_POST['qty'] > 0) {
                $id_sp = $_POST['id_sp'];
                $qty = $_POST['qty'];
                add_item($id_gh, $id_sp, $qty);
            }

            if (isset($_GET['del_cart_item']) && $_GET['del_cart_item'] > 0) {
                $id_sp = $_GET['del_cart_item'];
                remove_item($id_gh,$id_sp);
            }

            if (isset($_POST['update_cart'])) {
                $id_arr = $_POST['id_mh'];
                foreach ($id_arr as $id_mh => $qty) {
                    $id_sp = $_POST['id_sp'][$id_mh];
                    update_cart($id_mh,$id_sp,$qty,$id_gh);
                }
            }

            if(count(check_cart_null($id_gh)) <= 0)
            $thongbao = '<h2 class="text-danger text-center m-5">Giỏ hàng của bạn đang trống !</h2>';

            $sum = 0;
            $cart_items = load_all_cart_item($id_user);
            include 'view/cart.php';
        break;

        case 'checkout':
            if (count(check_cart_null($id_gh)) <= 0) header('Location: ?act=shop');
            if (!isset($_SESSION['user'])) header('Location: ?act=dangnhap');
            $sum = 0;
            $cart_items = load_all_cart_item($id_user);
            include 'view/checkout.php';
        break;
            
        case 'billconfirm':
            if (!$_SESSION['user']) header('location: ?act=dangnhap');
            if (count(check_cart_null($id_gh)) <= 0) header('Location: ?act=shop');

            if(isset($_POST['bill_confirm'])){
                $ho_va_ten = $_POST['ho_va_ten'];
                $dia_chi = $_POST['dia_chi'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $total = $_POST['total'];
                $pttt = $_POST['pttt'];
                
                // nếu giỏ hàng có sản phẩm thì tạo đơn hàng mới
                if(is_array(check_cart_null($id_gh)) && count(check_cart_null($id_gh)) > 0){
                    add_order($id_user, $ho_va_ten, $email, $sdt, $dia_chi, $total, $pttt);

                    // thêm sản phẩm vào đơn hàng 
                    foreach($cart_items as $item){
                        $id_donhang = current_order($id_user)['id']; // id của đơn hàng vừa tạo
                        $id_sp = $item['id_sp'];
                        $qty = $item['so_luong'];
                        $price = $item['gia_sp'];
                        add_order_item($id_donhang,$id_sp,$qty,$price);
                    }

                } else $thongbao = "Giỏ hàng của bạn đang trống !";

                clear_cart($id_gh);
                
                $order = current_order($id_user);
                include 'view/billconfirm.php';
            } else {
                $sum = 0;
                include 'view/checkout.php';
            }
        break;

        case 'myAccount':
            // hủy đặt hàng
            if (isset($_GET['huy_id_dh']) && $_GET['huy_id_dh'] > 0) {
                $id_dh = $_GET['huy_id_dh'];
                huy_order($id_dh);
            }
            
            // đã nhận hàng -> update status deli & payment -> update sold product
            if (isset($_GET['success_order']) && $_GET['success_order'] > 0) {
                $id_dh = $_GET['success_order'];
                success_order($id_dh);
                update_sold_sp();
            }
            
            // load lịch sử đặt hàng
            if (isset($_SESSION['user'])) {          
                $my_orders = load_all_myorder($id_user);
            } else header('Location: ?act=dangnhap');


            include 'view/myAccount.php';
            break;
            
        case 'myOrder':
            if (!isset($_SESSION['user'])) header('Location: ?act=dangnhap');

            if (isset($_GET['id_dh']) && $_GET['id_dh'] > 0)
            $id_dh = $_GET['id_dh'];

            $order = load_one_order($id_dh);         // thông tin người đặt và thông tin đơn hàng
            $order_items = load_order_item($id_dh);  // thông tin sp

            include 'view/myOrder.php';
            break;

        case 'huy_order':
            if (isset($_GET['id_dh']) && $_GET['id_dh'] > 0)
            $id_dh = $_GET['id_dh'];
        break;

        case 'logout':
            if (isset($_SESSION['user'])) {
                unset($_SESSION['user']);
                header('location: index.php');
            }
        break;

        case 'contact':
            include 'view/contact.php';
        break;
    }
} else {
    $all_sp_new = load_all_sp_new();
    $all_bestseller = load_all_bestseller();
    include 'view/home.php';
}
include 'view/footer.php';

?>