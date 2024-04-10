<!-- Page Content  -->
<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Danh sách bình luận</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
              <!-- <a href="?act=them_danhmuc" class="btn btn-primary">Thêm danh mục</a> -->
            </div>
          </div>
          <div class="iq-card-body">
            <div class="table-responsive">
              <table class="data-tables table table-striped table-bordered text-center" style="width:100%">
                <thead>
                  <tr>
                    <th width="10%"> Tên sản phẩm</th>
                    <th width="10%"> Tên người dùng</th>
                    <th> Nội dung</th>
                    <th width="15%"> Ngày bình luận</th>
                    <th width="1%">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all_binhluan as $binhluan) { extract($binhluan) ?>
                  <tr>
                    <td><?=$binhluan['ten_sp']?></td>
                    <td><?=$binhluan['ho_va_ten']?></td>
                    <td><?=$binhluan['noi_dung']?></td>
                    <td><?=$binhluan['ngay_binh_luan']?></td>
                    <td>
                      <div class="flex align-items-center list-user-action">
                        <a class="bg-primary" data-toggle="tooltip" data-placement="top" titl data-original-title="Delete" 
                        onclick="return confirm('Chắc chắn xóa bình luận này ?')"
                        href="?act=xoa_binhluan&id_bl=<?=$id?>"><i class="ri-delete-bin-line"></i></a>        
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

                <?php foreach ($all_binhluan as $binhluan) {
                    extract($binhluan); ?>
                    <tr>
                        <td>
                            <?= $ten_sp ?>
                        </td>
                        <td>
                            <?= $ho_va_ten ?>
                        </td>
                        <td>
                            <?= $noi_dung ?>
                        </td>
                        <td>
                            <?= $ngay_binh_luan ?>
                        </td>
                        <td class="thaotac">
                            <a href="?act=xoa_binhluan&id_bl=<?=$id?>" class="delete"
                                onclick="return confirm('Chắc chắn xóa bình luận này ?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<!-- ranh thi lam -->
<!-- <div class="dropdown">
    <span onclick="myFunction()" class="dropbtn">▼</span>
    <div class="table-preview dropdown-content" id="myDropdown">
        <table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Thumbnail</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($all_sp as $sp) {
                    extract($sp);
                    $anh_sp = explode(',', $anh_sp)[0]; ?>
                    <tr>
                        <td>
                            <?= $ten_sp ?>
                        </td>
                        <td> <img src="../upload/<?= $anh_sp ?>" width="140px" height="180px">
                        </td>
                        <td>
                            <?= number_format($gia_sp) ?> VNĐ
                        </td>
                        <td> <textarea contenteditable="false" cols="50" rows="8"
                                style="border: none; background-color: unset;"><?= $mota_sp ?></textarea>
                        </td>
                    </tr>
                    <?php break;
                } ?>
            </tbody>
        </table>
    </div>
</div> -->

<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction(idsp) {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>