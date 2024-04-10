<!-- Page Content  -->
<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Danh sách danh mục</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
              <a href="?act=them_danhmuc" class="btn btn-primary">Thêm danh mục</a>
            </div>
          </div>
          <div class="iq-card-body">
            <div class="table-responsive">
              <table class="data-tables table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th width="1%">ID</th>
                    <th width="20%">Tên danh mục</th>
                    <th width="10%">Số lượng mặt hàng</th>
                    <th width="10%">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all_danhmuc as $dm) { ?>
                  <tr>
                    <td><?=$dm['id']?></td>
                    <td><?=$dm['ten_danh_muc']?></td>
                    <td>
                      <p class="mb-0 text-center"><?=$dm['soluong_mathang']?></p>
                    </td>
                    <td>
                      <div class="flex align-items-center list-user-action">
                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                          data-original-title="Edit" href="?act=sua_danhmuc&iddm=<?=$dm['id']?>"><i class="ri-pencil-line"></i></a>
                          <?php if($dm['soluong_mathang'] == 0) { ?>
                            <a class="bg-primary" onclick="return confirm('Xóa danh mục <?=$dm['ten_danh_muc']?> ?')" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Delete" href="?act=ql_danhmuc&del_iddm=<?=$dm['id']?>"><i class="ri-delete-bin-line"></i></a>
                            <?php } ?>
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