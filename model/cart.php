<?php
    function create_cart($idUser) {
        $sql = "SELECT * From giohang where id_user = $idUser";
        if (pdo_query_one($sql)) return;

        $sql = "INSERT INTO giohang(id_user) VALUE($idUser)";
        return pdo_execute($sql);
    } 

    function load_all_cart_item($idUser) {
        $sql = "SELECT gh.id as 'id_cart', mh.id as 'id_mh', gh.id_user, mh.id_sp, SUM(mh.so_luong) as 'so_luong', ten_sp, anh_sp, gia_sp 
        From giohang gh 
        inner join mathang mh on gh.id = mh.id_giohang 
        inner join sanpham sp on sp.id = mh.id_sp
        where gh.id_user = $idUser
        GROUP BY (id_sp)
        ORDER BY id_mh DESC";
        return pdo_query($sql);
    } 

    function current_cart($id_user) {
        $sql = "SELECT * FROM giohang where id_user = $id_user";
        return pdo_query_one($sql);
    }

    function add_item($id_gh, $id_sp, $qty){
        $sql = "INSERT INTO mathang(id_giohang, id_sp, so_luong) VALUES ($id_gh, $id_sp, $qty)";
        pdo_execute($sql);
    }

    function remove_item($id_gh, $id_sp){
        $sql = "DELETE FROM mathang where id_giohang = $id_gh and id_sp = $id_sp";
        pdo_execute($sql);
    }

    function update_cart($id_mh, $id_sp, $qty, $id_gh) {
        $sql = "UPDATE mathang set so_luong = 0 Where id_sp = $id_sp";
        pdo_execute($sql);
        
        $sql = "UPDATE mathang set so_luong = $qty Where id = $id_mh and id_giohang = $id_gh";
        pdo_execute($sql);
    }

    function clear_cart($id_gh){
        $sql = "DELETE FROM mathang where id_giohang = $id_gh";
        pdo_execute($sql);
    }

    function check_cart_null($id_gh) {
        $sql = "SELECT * FROM mathang where id_giohang = $id_gh";
        return pdo_query($sql);
    }
?>