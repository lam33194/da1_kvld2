<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách sản phẩm</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="?act=them_sanpham" class="btn btn-primary">Thêm sản phẩm</a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table class="text-center data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 3%;">ID</th>
                                        <th style="width: 12%;">Ảnh sản phẩm</th>
                                        <th style="width: 15%;">Tên sản phẩm</th>
                                        <th style="width: 10%;">Danh mục</th>
                                        <th style="width: 10%;">Giá sản phẩm</th>
                                        <th style="width: 7%;">Đã bán</th>
                                        <th style="width: 7%;">Số lượng</th>
                                        <th style="width: 10%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($all_sp as $sp) { 
                                        $anh_sp = explode(',', $sp['anh_sp'])[0];
                                    ?>
                                    <tr>
                                        <td><?=$sp['idsp']?></td>
                                        <td><img class="img-fluid rounded" src="../upload/<?=$anh_sp?>" alt=""></td>
                                        <td><?=$sp['ten_sp']?></td>
                                        <td><?=$sp['ten_danh_muc']?></td>
                                        <td>
                                            <p class="mb-0"><?=number_format($sp['gia_sp'])?> VNĐ</p>
                                        </td>
                                        <td><?=$sp['sold']?></td>
                                        <td>0</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a href="?act=sua_sanpham&id_sp=<?=$sp['idsp']?>" class="bg-primary" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Edit" href="admin-add-book.html">
                                                    <i class="ri-pencil-line"></i>
                                                </a>
                                                <!-- <a href="?act=xoa_sanpham&id_sp=<?=$sp['idsp']?>" class="bg-primary" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Delete" href="#">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a> -->
                                            </div>
                                        </td>                                
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Wrapper END -->