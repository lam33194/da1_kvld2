<?php
session_start();
ob_start();
include '../model/pdo.php';
include '../model/sanpham.php';
include '../model/danhmuc.php';
include '../model/donhang.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';

if (isset($_GET['act'])) $act = $_GET['act'];
else $act = "";

include 'view/header.php';

$all_danhmuc = load_all_dm();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 0) {
    switch ($act) {
        case 'ql_danhmuc':
            if (isset($_GET['del_iddm']) && $_GET['del_iddm'] > 0) {
                $id = $_GET['del_iddm'];
                xoa_danhmuc($id);
            }
            $all_danhmuc = load_all_dm_admin();
            include 'ql_danhmuc/list.php';
            break;

        case 'them_danhmuc':
            if (isset($_POST['add_danhmuc'])) {
                $tendanhmuc = $_POST['ten_dm'];
                if (!validateNull($tendanhmuc))
                    $thongbao = '
                        <div class="alert alert-danger" role="alert">
                        Bạn chưa nhập tên danh mục
                        </div>';
                else if (validate_unique_dm($tendanhmuc))
                    $thongbao = '
                        <div class="alert alert-danger" role="alert">
                        Danh mục đã tồn tại !
                        </div>';
                else {
                    if (them_danhmuc($tendanhmuc))
                        $thongbao = '<div class="alert alert-success" role="alert">
                            Thêm danh mục thành công !
                        </div>';
                }

                $all_danhmuc = load_all_dm();
                include 'ql_danhmuc/add.php';
            } else
                include 'ql_danhmuc/add.php';
            break;

        case 'sua_danhmuc':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0)
            $id = $_GET['iddm'];

            $one_danhmuc = load_one_dm($id);

            if (isset($_POST['update_danhmuc'])) {
                $ten_dm = $_POST['ten_dm'];

                if (!validateNull($ten_dm)) 
                    $thongbao = ' <div class="alert alert-danger" role="alert">
                    Bạn chưa nhập tên danh mục </div>';

                else if (count(validate_unique_dm($ten_dm)) >= 1)
                    $thongbao = ' <div class="alert alert-danger" role="alert">
                    Danh mục đã tồn tại ! </div>'; 

                else {
                    sua_danhmuc($id, $ten_dm);
                    $thongbao = '<div class="alert alert-success" role="alert">
                    Sửa danh mục thành công !</div>';
                }

                $one_danhmuc = load_one_dm($id);
            } 
            include 'ql_danhmuc/update.php';
            break;

        // ------------------------------------------------------------------/

        case 'ql_sanpham':
            $all_sp = load_all_sp_admin();
            $all_dm = load_all_dm(); // để lọc   
            include 'ql_sanpham/list.php';
            break;

        case 'xoa_sanpham':
            if (isset($_GET['id_sp']))
                $idsp = $_GET['id_sp'];
            xoa_sanpham($idsp);
            $all_sp = load_all_sp_admin();
            $all_dm = load_all_dm();
            include 'ql_sanpham/list.php';
            break;

        case 'them_sanpham':
            $all_dm = load_all_dm();
            if (isset($_POST['add_sanpham'])) {
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $mota_sp = $_POST['mota_sp'];
                $iddm = $_POST['iddm'];

                $imgArr = [];

                $target_dir = '../upload/';
                foreach ($_FILES as $nameAtt => $arr) {
                    $target_file = $target_dir . basename($_FILES[$nameAtt]["name"]);
                    move_uploaded_file($arr['tmp_name'], $target_file);
                    if ($_FILES[$nameAtt]["name"])
                        array_push($imgArr, $_FILES[$nameAtt]["name"]);
                }
                // chuyển tên file thành chuỗi
                $anh_sp = implode(',', $imgArr);
               
                them_sanpham($ten_sp, $gia_sp, $mota_sp, $anh_sp, $iddm);
                $thongbao = '<div class="alert alert-success" role="alert">
                Thêm sản phẩm thành công !</div>';

                $all_sanpham = load_all_sp();
                include 'ql_sanpham/add.php';
            } else include 'ql_sanpham/add.php';
            break;

        case 'sua_sanpham':
            if (isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $id_sp = $_GET['id_sp'];
                $load_info_sp = load_one_sp($id_sp);
                $load_anh_sp = explode(',', $load_info_sp['anh_sp']);
            }

            if (isset($_POST['update_sp'])) {
                $ten_sp = $_POST['ten_sp'];
                $gia_sp = $_POST['gia_sp'];
                $mota_sp = $_POST['mota_sp'];
                $iddm = $_POST['iddm'];

                $imgArr = [];

                $target_dir = '../upload/';
                foreach ($_FILES as $nameAtt => $arr) {
                    $target_file = $target_dir . basename($_FILES[$nameAtt]["name"]);
                    move_uploaded_file($arr['tmp_name'], $target_file);
                    if ($_FILES[$nameAtt]["name"])
                        array_push($imgArr, $_FILES[$nameAtt]["name"]);
                }
                
                $anh_sp = implode(',', $imgArr);
    
                update_sanpham($ten_sp, $gia_sp, $mota_sp, $anh_sp, $iddm, $id_sp);
                $thongbao = '<div class="alert alert-success" role="alert">
                Cập nhật thành công !</div>';
            }

            $load_info_sp = load_one_sp($id_sp);
            $load_anh_sp = explode(',', $load_info_sp['anh_sp']);

            include 'ql_sanpham/update.php';
        break;

        // ------------------------------------------------------------------/

        case 'ql_donhang':
            if (isset($_GET['confirm_id']) && $_GET['confirm_id'] > 0) {
                $id_dh = $_GET['confirm_id'];
                confirm_order($id_dh);
            }
            if (isset($_GET['success_id']) && $_GET['success_id'] > 0) {
                $id_dh = $_GET['success_id'];
                success_order_admin($id_dh);
            }
            $all_donhang = load_all_orders();
            include 'ql_donhang/list.php';
            break;

        // ------------------------------------------------------------------/

        case 'chi_tiet_donhang':
            if (isset($_GET['id_dh']) && $_GET['id_dh'] > 0) {
                $id_dh = $_GET['id_dh'];

            }
            $ct_donhang = load_one_order($id_dh);
            $ct_sp = load_order_item($id_dh);
            include 'ql_donhang/detail.php';
            break;

        // ------------------------------------------------------------------/

        case 'ql_taikhoan':
            if (isset($_GET['block_user']) && $_GET['block_user'] > 0 ){
                $id_user = $_GET['block_user'];
                block_user($id_user);
            }

            $all_taikhoan = load_all_users();
            include 'ql_taikhoan/list.php';
            break;

        case 'them_taikhoan':

            include 'ql_taikhoan/add.php';
            break;
        // ------------------------------------------------------------------/

        case 'ql_binhluan':
            $all_binhluan = load_all_binhluan();
            include 'ql_binhluan/list.php';
            break;

        // ------------------------------------------------------------------/

        case 'xoa_binhluan':
            if (isset($_GET['id_bl']) && $_GET['id_bl'] > 0) {
                $id_bl = $_GET['id_bl'];
                xoa_binhluan($id_bl);
            }
            $all_binhluan = load_all_binhluan();
            include 'ql_binhluan/list.php';
            break;

        // ------------------------------------------------------------------/

        default:
            include 'view/home.php';
            break;

    }
} else {
    header('location: ../index.php?act=dangnhap');
}
include 'view/footer.php';
?>