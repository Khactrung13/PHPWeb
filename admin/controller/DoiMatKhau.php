<?php
    session_start();
    include "admin.php"; 
    $taikhoan= $_SESSION['dangnhap'];
    $matkhaucu= $_POST['password_cu'];
    $matkhaumoi= $_POST['password_moi'];
    $matkhaumoi1= $_POST['password_nhaplai'];
    DoiMatKhau($taikhoan,$matkhaucu,$matkhaumoi,$matkhaumoi1);
?>