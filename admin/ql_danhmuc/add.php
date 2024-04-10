<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Thêm danh mục</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="?act=them_danhmuc" method="post">
                            <div class="form-group">
                                <label>Tên danh mục:</label>
                                <input type="text" class="form-control" name="ten_dm">
                                <?php if (isset($thongbao))
                                    echo $thongbao ?>
                                </div>
                                <button type="submit" name="add_danhmuc" class="btn btn-primary">Thêm danh mục</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <a href="?act=ql_danhmuc"><button type="button" class="btn btn-secondary">Quay
                                        lại</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Wrapper END -->
    <!-- <button class="return"><a href="?act=ql_danhmuc">Quay lại</a></button> -->