<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Thêm tài khoản</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="?act=them_taikhoan">
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" class="form-control" name="user_name">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="user_email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="user_phone">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Vai trò</label>
                                    <select class="form-control" id="selectuserrole" name="user_role">
                                        <option selected value="1">Người dùng</option>
                                        <option value="0">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="user_address">
                                </div>
                            </div>

                            <br>

                          
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" name="user_pass">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" name="user_cfpass">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" name="user_submit">Thêm</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Wrapper END -->