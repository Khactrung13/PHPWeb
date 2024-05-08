<?php 
session_start();
include "KhachHangController.php"; 
$taikhoan = $_SESSION['id_khachhang'];
$matkhaucu = $_POST['password_cu'];
$matkhaumoi = $_POST['password_moi'];
$matkhaumoi1 = $_POST['password_moi1'];
DoiMatKhau($taikhoan,$matkhaucu,$matkhaumoi,$matkhaumoi1);
?>