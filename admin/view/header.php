<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmin.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
</head>

<body>
    <header>
        <h1><a href="../index.php">Destry</a></h1>
        <a href="">Đăng xuất</a>
    </header>
    <hr>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-title">
                <h2>Trang quản trị</h2>
            </div>
            <div class="sidebar-list">
                <div class="sidebar-list-row">
                    <a href="index.php">Tổng quan</a>
                </div>

                <div class="sidebar-list-row">
                    <a href="?act=ql_sanpham">Quản lý sản phẩm</a>
                </div>

                <div class="sidebar-list-row">
                    <a href="?act=ql_danhmuc">Quản lý danh mục</a>
                </div>

                <div class="sidebar-list-row">
                    <a href="?act=ql_donhang">Quản lý đơn hàng</a>
                </div>

                <div class="sidebar-list-row">
                    <a href="?act=ql_taikhoan">Quản lý tài khoản</a>
                </div>

                <div class="sidebar-list-row">
                    <a href="?act=ql_binhluan">Quản lý bình luận</a>
                </div>

                <!-- <div class="sidebar-list-row">
                    <a href="?act=ql_dichvu">Quản lý dịch vụ</a>
                </div> -->
            </div>
        </div>