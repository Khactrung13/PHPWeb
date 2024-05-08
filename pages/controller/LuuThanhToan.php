<?PHP 
 include "../../config/config.php";  
    session_start();
    $partnerCode = $_GET['partnerCode'];
    $orderId = $_GET['orderId'];
    $orderInfo = $_GET['orderInfo'];
    $amount = $_GET['amount'];
    $orderType = $_GET['orderType'];
    $transId = $_GET['transId'];
    $payType = $_GET['payType'];
    $code_cart= $_SESSION['code_cart'];
    $id_khachhang= $_SESSION['id_khachhang'];
    $insert_cart=  "INSERT INTO tbl_thongtinthanhtoan(partnerCode,orderId,orderInfo,amount,orderType,transId,payType,code_cart,id_khachhang) 
    VALUE('".$partnerCode."','".$orderId."','".$orderInfo."','".$amount."','".$orderType."','".$transId."','".$payType."','".$code_cart."','".$id_khachhang."')";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if( $cart_query){
        //Cap nhat don hang da thanh toan
        unset($_SESSION['cart']);
        $sql= mysqli_query($mysqli,"UPDATE tbl_cart SET thanhtoan=1 WHERE code_cart='".$code_cart."'");
        //Cap nhat phuong thuc thanh toan
        $sql_capnhat= mysqli_query($mysqli,"UPDATE tbl_cart SET HinhThucThanhToan=1 WHERE code_cart='".$code_cart."'");
        ?>
        <script>
        location.href = '../index.php?ql=camon';
        </script>
    <?php

    }else{
        
        ?>
        <script>
        location.href = '../index.php?ql=phuongthucthanhtoan&thongbao=giaodichthatbai';
        </script>
    <?php
    }

?>