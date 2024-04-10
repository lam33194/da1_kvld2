<?php
function load_all_dm_admin() {
    $sql = 'SELECT dm.id, dm.ten_danh_muc, count(sp.id) as "soluong_mathang" FROM danhmuc dm 
    left join sanpham sp on sp.iddm = dm.id 
    GROUP BY dm.id
    order by dm.id desc';
    return pdo_query($sql);
}
function load_all_dm() {
    $sql = 'SELECT * FROM danhmuc';
    return pdo_query($sql);
}
function load_all_dm_shop() {
    $sql = 'SELECT dm.id, dm.ten_danh_muc, count(sp.id) as "soluong_mathang" FROM danhmuc dm 
    inner join sanpham sp on sp.iddm = dm.id 
    GROUP BY dm.id
    order by soluong_mathang desc';
    return pdo_query($sql);
}

function load_one_dm($id) {
    $sql = "SELECT * FROM danhmuc where id = $id";
    return pdo_query_one($sql);
}

function them_danhmuc($ten_dm) {
    $sql = "INSERT INTO danhmuc(ten_danh_muc) VALUES('$ten_dm')";
    pdo_execute($sql);
    return true;
}
function sua_danhmuc($iddm, $tendanhmuc) {
    $sql = "UPDATE danhmuc SET ten_danh_muc = '$tendanhmuc' where id = $iddm";
    pdo_execute($sql);
}
function xoa_danhmuc($id){
    $sql = "DELETE from danhmuc where id = '$id'";
    pdo_execute($sql);
}
function validate_unique_dm($tendm) {
    $sql = "SELECT * FROM danhmuc where ten_danh_muc = '$tendm'";
    return pdo_query($sql);
}