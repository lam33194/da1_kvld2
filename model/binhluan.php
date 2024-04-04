<?php 
// load bình luận ở trang ctsp 
function load_all_binhluan_sp($id_sp) { 
    $sql = "SELECT * FROM binhluan bl 
    inner join taikhoan tk on tk.id = bl.id_user 
    where id_sp = $id_sp
    ORDER BY bl.id desc";
    return pdo_query($sql);
}
function load_all_binhluan() {
    $sql = "SELECT * FROM binhluan bl 
    inner join taikhoan tk on tk.id = bl.id_user 
    inner join sanpham sp on sp.id = bl.id_sp";
    return pdo_query($sql);
}
function add_binhluan($id_sp,$id_user,$noi_dung) {
    $sql = "INSERT INTO binhluan (id_sp,id_user,noi_dung) 
    VALUES ($id_sp,$id_user,'$noi_dung')";
    pdo_execute($sql);
    return true;
}
function check_user_buy($id_user, $id_sp) {
    $sql = "SELECT * FROM `donhang` dh 
    inner JOIN donhang_items dhi on dh.id = dhi.id_donhang 
    INNER JOIN sanpham sp on sp.id = dhi.id_sp 
    WHERE user_id = $id_user and dhi.id_sp = $id_sp 
    and status_delivery = 2 and status_payment = 1";
    return pdo_query($sql);
}
function xoa_binhluan($id_bl) {
    $sql = "DELETE FROM `binhluan` where id = $id_bl";
    pdo_execute($sql);
}
?>