 <!-- Page Content  -->
 <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Quản lý tài khoản</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="table-responsive">
                           <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control w-75" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              
                              <div class="col-sm-12 col-md-2">
                                 <div class="iq-card-header-toolbar">
                                    <a href="?act=them_taikhoan" class="btn btn-primary">Thêm tài khoản</a>
                                 </div>
                              </div>
                           </div>

                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Họ và tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Vai trò</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày đăng ký</th>
                                    <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                <?php foreach($all_taikhoan as $taikhoan) {?>
                                 <tr>
                                    <td><?=$taikhoan['id']?></td>
                                    <td><?=$taikhoan['ho_va_ten']?></td>
                                    <td><?=$taikhoan['sdt']?></td>
                                    <td><?=$taikhoan['email']?></td>
                                    <td><span class="badge iq-bg-primary">Active</span></td>
                                    <td><?=$taikhoan['dia_chi']?></td>
                                    <td><?=$taikhoan['ngay_dangky']?></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sửa" href="#"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn" href="#"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 <?php } ?> 
                             </tbody>
                           </table>
                        </div>
                           <!-- <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing 1 to 5 of 5 entries</span>
                              </div>
                              <div class="col-md-6">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                       <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
                           </div> -->
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- Wrapper END -->
                            <!-- <td>switch($role){ 
                            // 0: chờ xác nhận 1: chờ giao hàng 2: đã giao -1: đã hủy
                            case '-1':
                                echo 'Đang bị cấm';
                            break;
                            case '1':
                                echo 'User';
                            break;
                            case '0':
                                echo 'Admin';
                            break;
                            } 
                            echo '</td><td class="thaotac">
                            <a href="?act=ql_taikhoan&block_user='.$id.'" onclick="return confirm(\'Chặn người dùng '.$ho_va_ten.' ?\');">❌</a>
                            </td>
                            </tr>'; -->