<?php 
function load_all_sp_admin() {
    $sql = "SELECT * from sanpham order by id desc";
    return pdo_query($sql);
}
function load_all_sp() {
    $sql = "SELECT * from sanpham";
    return pdo_query($sql);
}
function load_all_sp_filter_dm($iddm) {
    $sql = "SELECT * from sanpham where iddm = $iddm";
    return pdo_query($sql);
}
function load_all_sp_filter_price($min, $max) {
    $sql = "SELECT * FROM `sanpham` WHERE gia_sp BETWEEN $min and $max";
    return pdo_query($sql);
}
function load_all_sp_search($searchStr) {
    $sql = "SELECT * from sanpham where ten_sp like '%$searchStr%'";
    return pdo_query($sql);
}
function load_all_sp_new() {
    $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 0,8";
    return pdo_query($sql);
}
function load_all_sp_related($id_dm) {
    $sql = "SELECT * FROM sanpham where iddm = $id_dm";
    return pdo_query($sql);
}
function load_all_bestseller() {
    $sql = "SELECT * FROM sanpham order by sold desc limit 0,8";
    return pdo_query($sql);
}

function load_one_sp($id) {
    $sql = "SELECT * from sanpham where id = $id";
    return pdo_query_one($sql);
}

function xoa_sanpham($idsp){
    $sql = "DELETE from sanpham where id = '$idsp'";
    pdo_execute($sql);
}

function them_sanpham($ten_sp, $gia_sp, $mota_sp, $anh_sp, $iddm)
{
    $sql = "INSERT INTO sanpham(`ten_sp`,`gia_sp`,`mota_sp`,`anh_sp`,`iddm`) 
    VALUES('$ten_sp','$gia_sp','$mota_sp','$anh_sp','$iddm')";
    pdo_execute($sql);
}

function update_sanpham($ten_sp, $gia_sp, $mota_sp, $anh_sp, $iddm, $id_sp)
{
    if (!$anh_sp) {
        $sql = "UPDATE sanpham SET 
        ten_sp = '$ten_sp',
        gia_sp = '$gia_sp',
        mota_sp = '$mota_sp',
        iddm = $iddm
        where id = $id_sp";
    } else 

    $sql = "UPDATE sanpham SET 
    ten_sp = '$ten_sp',
    gia_sp = '$gia_sp',
    mota_sp = '$mota_sp',
    anh_sp = '$anh_sp',
    iddm = $iddm
    where id = $id_sp";
    pdo_execute($sql);
}