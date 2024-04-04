<?php 
function load_one_user($id_user) {
    $sql = "SELECT * from taikhoan where id = $id_user";
    return pdo_query_one($sql);
}

function tao_taikhoan($username,$pass,$email,$sdt){
    $sql = "INSERT into taikhoan (`username`,`password`,`email`,`sdt`)
    VALUES('$username','$pass','$email','$sdt')";
    pdo_execute($sql);
}
function check_taikhoan_unique($email){
    $sql = "SELECT * from taikhoan where email='$email'";
    return pdo_query_one($sql);
}
function check_taikhoan($email,$pass){
    $sql="SELECT * from taikhoan where email='$email'";
    $ckemail=pdo_query_one($sql);

    $sql="SELECT * from taikhoan where password ='$pass'";
    $ckpass=pdo_query_one($sql);
    
    $sql = "SELECT * from taikhoan where email='$email' and password ='$pass'";
    
    if(!is_array($ckemail)) return 'Email chưa được đăng ký !';
    elseif (!is_array($ckpass)) return 'Mật khẩu không khớp';
    else return pdo_query_one($sql);
    
    // $sql = "SELECT * from taikhoan where email='$email' and password ='$pass'";
    // return pdo_query_one($sql);
}

function load_all_users() {
    $sql = "SELECT * FROM taikhoan";
    return pdo_query($sql);
}

function block_user($id) {
    $sql = "UPDATE taikhoan set role = -1 where id = $id";
    pdo_execute($sql);
}