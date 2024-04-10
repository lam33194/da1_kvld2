<?php
    function load_all_orders() {
        $sql = "SELECT *, dh.id as iddh From donhang dh
        inner join donhang_items dhi on dh.id = dhi.id_donhang
        inner join taikhoan tk on tk.id = dh.user_id
        group by id_donhang
        order by id_donhang desc";
        return pdo_query($sql);
    }
    function add_order($id_user,$ho_va_ten,$email,$sdt,$dia_chi,$total,$pttt) {
        $sql = "INSERT INTO donhang (user_id,user_name,user_email,user_phone,user_address,total_bill,pttt)
        values($id_user,'$ho_va_ten','$email','$sdt','$dia_chi',$total,$pttt)";
        pdo_execute($sql);
    }

    function add_order_item($id_donhang,$id_sp,$qty,$price) {
        $sql = "INSERT INTO donhang_items(id_donhang,id_sp,so_luong,price)
        values($id_donhang,$id_sp,$qty,$price)";
        pdo_execute($sql);
    }

    function current_order($id_user) {
        $sql = "SELECT * FROM donhang where user_id = $id_user order by id desc";
        return pdo_query_one($sql);
    }
    
    function load_all_myorder($id_user) {
        $sql = "SELECT * FROM donhang dh where user_id = $id_user
        order by dh.id desc";
        return pdo_query($sql);    
    }

    function load_one_order($id_dh) {
        $sql = "SELECT dh.id as 'id_dh', dh.user_name, dh.user_email, dh.user_phone, dh.user_address, 
        dh.total_bill, dh.status_delivery, dh.status_payment, dh.created_at, dh.updated_at, dh.pttt, 
        dhi.id_sp as 'id_sp',  dhi.so_luong,  dhi.price
        From donhang dh inner join donhang_items dhi on dh.id = dhi.id_donhang
        where dh.id = $id_dh
        group by dhi.id";
        return pdo_query_one($sql);
    }

    function load_order_item($id_dh) {
        $sql = "SELECT dhi.id as 'id_item', dhi.so_luong, dhi.price, sp.ten_sp, sp.anh_sp 
        FROM donhang_items dhi INNER JOIN donhang dh on dh.id = dhi.id_donhang 
        INNER JOIN sanpham sp ON sp.id = dhi.id_sp 
        WHERE dh.id = $id_dh";
        return pdo_query($sql);    
    }
    function huy_order($id_dh){
        $sql = "UPDATE donhang SET status_delivery = -1, status_payment = -1  where id = $id_dh";
        pdo_execute($sql);
        return true;
    }
    function confirm_order($id_dh){
        $sql = "UPDATE donhang SET status_delivery = 1  where id = $id_dh";
        pdo_execute($sql);
        return true;
    }
    function success_order($id_dh){
        $sql = "UPDATE donhang SET status_delivery = 2, status_payment = 1 where id = $id_dh";
        pdo_execute($sql);
        return true;
    }
    function success_order_admin($id_dh){
        $sql = "UPDATE donhang SET status_delivery = 3 where id = $id_dh";
        pdo_execute($sql);
        return true;
    }
    function update_sold_sp() {
        $sql = "UPDATE sanpham sp INNER join donhang_items dhi on dhi.id_sp = sp.id 
        INNER JOIN donhang dh on dh.id = dhi.id_donhang 
        SET sp.sold = sp.sold + dhi.so_luong
        where status_delivery = 2 and status_payment = 1";
        pdo_execute($sql);
    }
?>