<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/booksto/html/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Apr 2024 02:02:07 GMT -->

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Admin</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="images/favicon.ico" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css"> -->
   <!-- Typography CSS -->
   <link rel="stylesheet" href="css/typography.css">
   <!-- Style CSS -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/styleAdmin.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
   <!-- loader Start -->
   <!-- <div id="loading">
         <div id="loading-center">
         </div>
      </div> -->
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar start  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.php" class="header-logo">
               <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">KVLD Shop</span>
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="<?php if(!$act) echo 'active menu-active'?>">
                     <a href="index.php" class="iq-waves-effect">
                        <span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i>
                        <span>Tổng quan</span>
                     </a>
                  </li>

                  <li class="<?php if(str_contains($act, 'danhmuc')) echo 'active menu-active'?>" >
                     <a href="#catagory" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?=str_contains($act, 'danhmuc')?>">
                        <span class="ripple rippleEffect"></span><i class="ri-function-line"></i>
                        <span>Quản lý danh mục</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="catagory" class="iq-submenu collapse <?php if(str_contains($act, 'danhmuc')) echo 'show'?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?php if($act == 'them_danhmuc') echo 'active menu-active'?>"><a href="?act=them_danhmuc"><i class="las la-plus-circle"></i>Thêm danh mục</a></li>
                        <li class="<?php if($act == 'ql_danhmuc') echo 'active menu-active'?>"><a href="?act=ql_danhmuc"><i class="las la-th-list"></i>Danh sách danh mục</a></li>
                     </ul>
                  </li>

                  <li class="<?php if(str_contains($act, 'sanpham')) echo 'active menu-active'?>" >
                     <a href="#product" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?=str_contains($act, 'sanpham')?>">
                        <span class="ripple rippleEffect"></span><i class="ri-book-line"></i>
                        <span>Quản lý sản phẩm</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="product" class="iq-submenu collapse <?php if(str_contains($act, 'sanpham')) echo 'show'?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?php if($act == 'them_sanpham') echo 'active menu-active'?>"><a href="?act=them_sanpham"><i class="las la-plus-circle"></i>Thêm sản phẩm</a></li>
                        <li class="<?php if($act == 'ql_sanpham') echo 'active menu-active'?>"><a href="?act=ql_sanpham"><i class="las la-th-list"></i>Danh sách sản phẩm</a></li>
                     </ul>
                  </li>

                  <li class="<?php if(str_contains($act, 'taikhoan')) echo 'active menu-active'?>" >
                     <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="<?=str_contains($act, 'taikhoan')?>">
                        <span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i>
                        <span>Quản lý tài khoản</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="userinfo" class="iq-submenu collapse <?php if(str_contains($act, 'taikhoan')) echo 'show'?>" data-parent="#iq-sidebar-toggle">
                        <li class="<?php if($act == 'them_taikhoan') echo 'active menu-active'?>"><a href="?act=them_taikhoan"><i class="las la-plus-circle"></i>Thêm tài khoản</a></li>
                        <li class="<?php if($act == 'ql_taikhoan') echo 'active menu-active'?>"><a href="?act=ql_taikhoan"><i class="las la-th-list"></i>Danh sách tài khoản</a></li>
                     </ul>
                  </li>

                  <li class="<?php if(str_contains($act, 'donhang')) echo 'active menu-active'?>">
                     <a href="?act=ql_donhang" class="iq-waves-effect">
                        <span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i>
                        <span>Quản lý đơn hàng</span>
                     </a>
                  </li>

                  <li class="<?php if(str_contains($act, 'binhluan')) echo 'active menu-active'?>">
                     <a href="?act=ql_binhluan" class="iq-waves-effect">
                        <span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i>
                        <span>Quản lý bình luận</span>
                     </a>
                  </li>

                  <li>
                     <a href="" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
                        <span class="ripple rippleEffect"></span><i class="ri-pie-chart-box-line"></i>
                        <span>Biểu đồ thống kê</span></a>
                  </li>

               </ul>
            </nav>
         </div>
      </div>
      <!-- Sidebar end  -->

      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="index.html" class="header-logo">
                        <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                           <span class="text-primary text-uppercase">Booksto</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Tổng quan</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashbord</li>
                     </ul>
                  </nav>
               </div>
               <div class="iq-search-bar">
                  <!-- <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Search Here...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form> -->
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-search-line"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                     </li>
                     <li class="nav-item nav-icon">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-notification-2-line"></i>
                           <span class="bg-primary dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Notifications<small
                                          class="badge  badge-light float-right pt-1">4</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Emma Watson Barry</h6>
                                          <small class="float-right font-size-12">Just Now</small>
                                          <p class="mb-0">95 MB</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New customer is join</h6>
                                          <small class="float-right font-size-12">5 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Two customer is left</h6>
                                          <small class="float-right font-size-12">2 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New Mail from Fenny</h6>
                                          <small class="float-right font-size-12">3 days ago</small>
                                          <p class="mb-0">Cyst Barry</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->