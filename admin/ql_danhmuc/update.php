<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Sửa danh mục</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="?act=sua_danhmuc&iddm=<?=$one_danhmuc['id']?>" method="post">
                            <div class="form-group">
                                <label>ID danh mục</label>
                                <input value="<?=$one_danhmuc['id']?>" disabled type="text" class="form-control" name="ten_dm" value="<?=$one_danhmuc['ten_danh_muc']?>">
                            </div>
                            <div class="form-group">
                                <label>Tên danh mục:</label>
                                <input type="text" class="form-control" name="ten_dm" value="<?=$one_danhmuc['ten_danh_muc']?>">
                                <br>
                                <?php if (isset($thongbao)) echo $thongbao ?>
                            </div>
                            <button type="submit" class="btn btn-primary" value="Sửa" name="update_danhmuc">Cập nhật</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <a href="?act=ql_danhmuc"><button type="button" class="btn btn-secondary">Quay lại</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Wrapper END -->