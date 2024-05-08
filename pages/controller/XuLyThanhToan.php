<?php
    session_start();
    include "../../config/config.php";  
    $id=$_GET['id'];
    $hinhthucthanhtoan = $_POST['customRadio'];
    if($hinhthucthanhtoan==0){
        header('Location:../index.php?ql=camon');
    }else{
        $sql_sua ="UPDATE tbl_cart SET HinhThucThanhToan='".$hinhthucthanhtoan."'
        WHERE code_cart='".$id."' ";
        mysqli_query($mysqli,$sql_sua);
        unset($_SESSION['cart']);
        header('Location:../index.php?ql=camon');
    }
    $sql_sua ="UPDATE tbl_cart SET HinhThucThanhToan='".$hinhthucthanhtoan."'
    WHERE code_cart='".$id."' ";
    mysqli_query($mysqli,$sql_sua);
    unset($_SESSION['cart']);
    unset($_SESSION['soluong']);
?>