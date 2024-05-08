<?php
    session_start();
    include "../../config/config.php";  
    $id_khachhang= $_SESSION['id_khachhang'];
    $code_oder = rand(0,9999);
    $ngayHienTai = date("Y-m-d");
    $insert_cart= "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status,thanhtoan,HinhThucThanhToan,NgayDat) 
                    VALUE('".$id_khachhang."','".$code_oder."','1','0','0','".$ngayHienTai."')";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        //them chi tiet gio hang
        foreach($_SESSION['cart'] AS $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) 
                                    VALUE('".$id_sanpham."','".$code_oder."','".$soluong."')";
            mysqli_query($mysqli,$insert_order_details);
        }
    }
    $_SESSION['code_cart']=$code_oder;
    //unset($_SESSION['cart']);
    header('Location:../index.php?ql=thongtinnhanhang&id='.$code_oder);
?>