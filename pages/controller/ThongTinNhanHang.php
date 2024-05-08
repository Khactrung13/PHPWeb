<?php
    session_start();
    include "../../config/config.php";
    include "../model/ThongTinNhanHang.php";  
    $ten = $_POST['hovaten'];
    $sodienthoai = $_POST['sodienthoai'];
    $diachi = $_POST['diachi'];
    $ghichu = $_POST['ghichu'];
    $id_khachhang= $_SESSION['id_khachhang'];
    $id_donhang = $_GET['id'];
    if($ten=='' || $sodienthoai=='' || $diachi==''){
        header('Location:../index.php?ql=thongtinnhanhang&thongbao=sai&id='.$id_donhang);
    }else{
        $insert_cart= "INSERT INTO tbl_thongtinnhanhang(ten,sodienthoai,diachi,ghichu,id_dangky,id_cart) 
                        VALUE('".$ten."','".$sodienthoai."','".$diachi."',
                        '".$ghichu."','".$id_khachhang."','".$id_donhang."')";
        $cart_query = mysqli_query($mysqli,$insert_cart);
        header('Location:../index.php?ql=phuongthucthanhtoan&id='.$id_donhang);
    }

    function loadThongTinNhanHang($id){
    $mysqli = config();
	$sql_pro = "SELECT * FROM tbl_thongtinnhanhang WHERE id_cart=$id LIMIT 1";
    $query_pro= mysqli_query($mysqli,$sql_pro);
    while($row =mysqli_fetch_array($query_pro)){
        $ten = $row['ten'];
        $sodt = $row['sodienthoai'];
        $diachi = $row['diachi'];
        $ghichu = $row['ghichu'];
        $iddonhang = $row['id_cart'];
        $thongtinnhanhang = new ThongTinNhanHang($ten, $diachi, $ghichu, $sodt, $iddonhang);
        
    }
  return $thongtinnhanhang;
}
?>