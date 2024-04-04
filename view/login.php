<!-- Breadcrumb Section Start -->
<div class="section">

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-light">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h1 class="title">Login | Register</h1>
                <ul>
                    <li>
                        <a href="index.html">Home </a>
                    </li>
                    <li class="active"> Login | Register</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

</div>
<!-- Breadcrumb Section End -->

<!-- Login | Register Section Start -->
<div class="section section-margin">
    <div class="container">

        <div class="row mb-n10">
            <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                <!-- Login Wrapper Start -->
                <div class="login-wrapper">

                    <!-- Login Title & Content Start -->
                    <div class="section-content text-center mb-5">
                        <h2 class="title mb-2">Login</h2>
                        <p class="desc-content">Please login using account detail bellow.</p>
                    </div>
                    <!-- Login Title & Content End -->

                    <!-- Form Action Start -->
                    <form action="?act=dangnhap" method="post">
                        <!-- Input Email Start -->
                        <?php if (isset ($thongbao))
                            echo '<span style="color:red;">' . $thongbao . '</span>' ?>
                            <div class="single-input-item mb-3">
                                <input <?php if($_GET['act'] == 'dangnhap') echo 'autofocus' ?> type="email" name="email" placeholder="Email">
                            </div>
                            <!-- Input Email End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" name="password" placeholder="Enter your Password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Checkbox/Forget Password Start -->
                            <div class="single-input-item mb-3">
                                <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                    <div class="remember-meta mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="forget-pwd mb-3">Forget Password?</a>
                                </div>
                            </div>
                            <!-- Checkbox/Forget Password End -->

                            <!-- Login Button Start -->
                            <div class="single-input-item mb-3">
                                <button type="submit" class="btn btn btn-dark btn-hover-primary rounded-0"
                                    name="signin">Đăng nhập</button>
                            </div>
                            <!-- Login Button End -->
                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Login Wrapper End -->
                </div>
                <div class="col-lg-6 col-md-8 m-auto m-lg-0 pb-10">
                    <!-- Register Wrapper Start -->
                    <div class="register-wrapper">

                        <!-- Login Title & Content Start -->
                        <div class="section-content text-center mb-5">
                            <h2 class="title mb-2">Create Account</h2>
                            <p class="desc-content">Please Register using account detail bellow.</p>
                        </div>
                        <!-- Login Title & Content End -->

                        <!-- Form Action Start -->
                        <form action="?act=dangky" method="post">
                        <?php if (isset ($thongbao_dangky))
                            echo '<span style="color:red;">' . $thongbao_dangky . '</span>' ?>
                            <!-- Input First Name Start -->
                            <div class="single-input-item mb-3">
                                <input <?php if(($_GET['act']) == 'dangky') echo 'autofocus' ?> type="text" placeholder="Họ và tên" name="fullname">
                            </div>
                            <!-- Input First Name End -->

                            <!-- Input Email Or Username Start -->
                            <div class="single-input-item mb-3">
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <!-- Input Email Or Username End -->

                            <!-- Input Phone number Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Số điện thoại" name="sdt">
                            </div>
                            <!-- Input Phone number End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Enter your Password" name="password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Input Password Start -->
                            <div class="single-input-item mb-3">
                                <input type="password" placeholder="Confirm your Password" name="cf_password">
                            </div>
                            <!-- Input Password End -->

                            <!-- Register Button Start -->
                            <div class="single-input-item mb-3">
                            <button type="submit" class="btn btn btn-dark btn-hover-primary rounded-0"
                                    name="signup">Đăng ký</button>
                            </div>
                            <!-- Register Button End -->

                        </form>
                        <!-- Form Action End -->

                    </div>
                    <!-- Register Wrapper End -->
                </div>
            </div>

        </div>
    </div>
<!-- Login | Register Section End -->