<!-- Page Content  -->
<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Danh sách đơn hàng</h4>
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
                    <th width="1%">ID</th>
                    <th width="16%">Ngày đặt hàng</th>
                    <th width="10%">Người đặt</th>
                    <th width="15%">Tổng tiền</th>
                    <th width="13%">Trạng thái giao hàng</th>
                    <th width="13%">Trạng thái thanh toán</th>
                    <th width="20%" colspan='2'>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all_donhang as $donhang) { ?>
                  <tr>
                    <td><?=$donhang['iddh']?></td>
                    <td><?=$donhang['created_at']?></td>
                    <td><?=$donhang['ho_va_ten']?></td>
                    <td><?=number_format($donhang['total_bill'])?> VNĐ</td>
                    <td><?php switch($donhang['status_delivery']){ 
                            // 0: chưa xác nhận 1: đã xác nhận 2: chờ giao hàng 3: đã giao hàng -1: đã hủy
                            case '0':
                                echo 'Chưa xác nhận';
                            break;
                            // case '1':
                            //     echo 'Chờ đơn vị vận chuyển';
                            // break;
                            case '1':
                                echo 'Đang giao hàng';
                            break;
                            case '2':
                                echo 'Đã giao hàng';
                            break;
                            case '3':
                                echo 'Đã giao hàng';
                            break;
                            case '-1':
                                echo 'Đơn đã hủy';
                            break;
                        }?>
                        </td>

                        <td><?php switch($donhang['status_payment']){
                            // 0: chưa thanh toán 1: đã thanh toán -1: đơn hàng đã hủy
                            case '0':
                                echo 'Chưa thanh toán';
                            break;
                            case '1':
                                echo 'Đã thanh toán';
                            break;
                            case '-1':
                                echo 'Đơn đã hủy';
                            break;
                        }?>
                        </td>
                        
                        <td>
                            <?php
                                switch ($donhang['status_delivery']) {
                                    case '0':
                                        echo "<a href='?act=ql_donhang&confirm_id=".$donhang['iddh']."'>Xác nhận</a>"; //xác nhận đơn
                                        break;
                                    case '1':
                                        echo "Đã xác nhận";
                                        break;
                                    case '2':
                                        if ($donhang['status_payment'] == 1)
                                        echo "<a href='?act=ql_donhang&success_id=".$donhang['iddh']."'>Hoàn thành</a>";
                                        else break;
                                    break;
                                    case '3':
                                        echo "Đã hoàn thành";
                                        break;
                                    case '-1':
                                        echo "<span class='text-danger'>Đơn đã hủy</span>";
                                    break;
                                }  ?>
                        </td>
                        <td><a href="?act=chi_tiet_donhang&id_dh=<?=$donhang['iddh']?>">Xem chi tiết</a></td>
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