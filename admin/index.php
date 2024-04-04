<?php
session_start();
include 'view/header.php';
include '../model/pdo.php';
include '../model/sanpham.php';
include '../model/danhmuc.php';
include '../model/donhang.php';
include '../model/taikhoan.php';
include '../model/binhluan.php';

if (isset($_GET['act']))
    $act = $_GET['act'];
else
    $act = "";

$all_danhmuc = load_all_dm();

if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 0) {
    switch ($act) {
        case 'ql_danhmuc':
            $all_danhmuc = load_all_dm_admin();
            include 'danhmuc/list.php';
            break;

        case 'xoa_danhmuc':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0)
                $id = $_GET['iddm'];
            xoa_danhmuc($id);
            $all_danhmuc = load_all_dm();
            include 'danhmuc/list.php';
            break;

        case 'themdanhmuc':
            if (isset($_POST['add_danhmuc'])) {
                $tendanhmuc = $_POST['ten_dm'];

                if (!validateNull($tendanhmuc))
                    $thongbao = 'Không được bỏ trống !';
                else if (validate_unique_dm($tendanhmuc))
                    $thongbao = 'Danh mục đã tồn tại !';
                else {
                    if (them_danhmuc($tendanhmuc))
                        $thongbao = 'Thêm danh mục thành công !';
                }

                $all_danhmuc = load_all_dm();
                include 'danhmuc/add.php';
            } else
                include 'danhmuc/add.php';
            break;

        case 'sua_danhmuc':
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0)
                $id = $_GET['iddm'];

            $one_danhmuc = load_one_dm($id);

            if (isset($_POST['update_danhmuc'])) {
                $ten_dm = $_POST['ten_dm'];
                sua_danhmuc($id, $ten_dm);

                $one_danhmuc = load_one_dm($id);
                include 'danhmuc/update.php';
            } else
                include 'danhmuc/update.php';
            break;

        // ------------------------------------------------------------------/

        case 'ql_sanpham':
            $all_sp = load_all_sp_admin();
            $all_dm = load_all_dm();
            include 'sanpham/list.php';
            break;

        case 'xoa_sanpham':
            if (isset($_GET['id_sp']))
                $idsp = $_GET['id_sp'];
            xoa_sanpham($idsp);
            $all_sp = load_all_sp_admin();
            include 'sanpham/list.php';
            break;

        case 'them_sanpham':
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

                if (!validateNull($ten_sp, $gia_sp, $mota_sp, $iddm, $anh_sp))
                    $thongbao = '<span style="color:red">Bạn chưa nhập đủ thông tin !</span>';
                else {
                    if (them_sanpham($ten_sp, $gia_sp, $mota_sp, $anh_sp, $iddm))
                        $thongbao = 'Thêm sản phẩm thành công !';
                }

                $all_sanpham = load_all_sp();
                include 'sanpham/add.php';
            } else
                include 'sanpham/add.php';
            break;

        case 'sua_sanpham':
            if (isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $id_sp = $_GET['id_sp'];
                $load_info_sp = load_one_sp($id_sp);
                $load_anh_sp = explode(',', $load_info_sp['anh_sp']);
                $i = 0;
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
                
                if (!validateNull($ten_sp, $gia_sp, $mota_sp, $iddm))
                    $thongbao = '<span style="color:red">Bạn chưa nhập đủ thông tin !</span>';
                else {
                    update_sanpham($ten_sp, $gia_sp, $mota_sp, $anh_sp, $iddm, $id_sp);
                    $thongbao = 'Cập nhật thành công !';
                }

            }
            $load_info_sp = load_one_sp($id_sp);
            $load_anh_sp = explode(',', $load_info_sp['anh_sp']);
            include 'sanpham/update.php';
            break;

        // ------------------------------------------------------------------/

        case 'ql_donhang':
            if (isset($_GET['confirm_id']) && $_GET['confirm_id'] > 0) {
                $id_dh = $_GET['confirm_id'];
                confirm_order($id_dh);
            }
            $all_donhang = load_all_orders();
            include 'donhang/list.php';
            break;

        // ------------------------------------------------------------------/

        case 'chi_tiet_donhang':
            if (isset($_GET['id_dh']) && $_GET['id_dh'] > 0) {
                $id_dh = $_GET['id_dh'];

            }
            $ct_donhang = load_one_order($id_dh);
            $ct_sp = load_order_item($id_dh);
            $all_sp = load_order_item($id_dh);
            include 'donhang/detail.php';
            break;

        // ------------------------------------------------------------------/

        case 'ql_taikhoan':
            if (isset($_GET['block_user']) && $_GET['block_user'] > 0 ){
                $id_user = $_GET['block_user'];
                block_user($id_user);
            }

            $all_taikhoan = load_all_users();
            include 'taikhoan/list.php';
            break;

        // ------------------------------------------------------------------/

        case 'ql_binhluan':
            $all_binhluan = load_all_binhluan();
            include 'binhluan/list.php';
            break;

        // ------------------------------------------------------------------/

        case 'xoa_binhluan':
            if (isset($_GET['id_bl']) && $_GET['id_bl'] > 0) {
                $id_bl = $_GET['id_bl'];
                xoa_binhluan($id_bl);
            }
            $all_binhluan = load_all_binhluan();
            include 'binhluan/list.php';
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