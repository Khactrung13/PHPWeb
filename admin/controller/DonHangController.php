<?php 
include "../model/DonHang.php";
include "../model/ChiTietDonHang.php";
include "../model/ThongTinNhanHang.php";
include "../../config/config.php"; 

function loadDonHang()
{
  $mysqli = config();
  $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky 
  WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky
  ORDER BY tbl_cart.id_cart DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  $ds_dh = array();
  while($row =mysqli_fetch_array($query_lietke_dh)){
    $madonhang = $row['code_cart'];
    $tenkhachhang = $row['tenkhachhang'];
    $email= $row['email'];
    $diachi= $row['diachi'];
    $dienthoai= $row['dienthoai'];
    $tinhtrang= $row['cart_status'];
    $thanhtoan= $row['thanhtoan'];
    $hinhthucthanhtoan= $row['HinhThucThanhToan'];
    
    $ngaydat= $row['NgayDat'];
    $ngayChuyenDoi = date_create_from_format("Y-m-d", $ngaydat);
    $ngayDinhDangMoi = date_format($ngayChuyenDoi, "d-m-y");
    $donhang= new DonHang($madonhang, $tenkhachhang,$email,$diachi,$dienthoai,$tinhtrang,$thanhtoan,$hinhthucthanhtoan,$ngayDinhDangMoi);
    array_push($ds_dh, $donhang);
  }
  return $ds_dh;
}

function XemDonHang()
{
  $mysqli = config();
  $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky 
  WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky
  ORDER BY tbl_cart.id_cart DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  $ds_dh = array();
  while($row =mysqli_fetch_array($query_lietke_dh)){
    $madonhang = $row['code_cart'];
    $tenkhachhang = $row['tenkhachhang'];
    $email= $row['email'];
    $diachi= $row['diachi'];
    $dienthoai= $row['dienthoai'];
    $tinhtrang= $row['cart_status'];
    $thanhtoan= $row['thanhtoan'];
    $hinhthucthanhtoan= $row['HinhThucThanhToan'];
    $ngaydat= $row['NgayDat'];
    $donhang= new DonHang($madonhang, $tenkhachhang,$email,$diachi,$dienthoai,$tinhtrang,$thanhtoan,$hinhthucthanhtoan,$ngaydat);
    array_push($ds_dh, $donhang);
  }
  return $ds_dh;
}
function ChiTietDonHang($madonhang)
{
  $mysqli = config();
  $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham 
  WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham
  AND tbl_cart_details.code_cart=$madonhang
  ORDER BY tbl_cart_details.id_cart_details DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  $ds_dh = array();
  while($row =mysqli_fetch_array($query_lietke_dh)){
    $madonhang = $row['code_cart'];
    $tensanpham = $row['tensanpham'];
    $giasp= $row['giasp'];
    $soluong= $row['soluongmua'];
    $donhang= new ChiTietDonHang($madonhang, $tensanpham,$giasp,$soluong);
    array_push($ds_dh, $donhang);
  }
  return $ds_dh;
}
function XuLyDonHang($status,$code)
{
  $mysqli = config();
  $sql= mysqli_query($mysqli,"UPDATE tbl_cart SET cart_status='".$status."' WHERE code_cart='".$code."'");
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
function timkiem($tukhoa)
{
  $mysqli = config();
  $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky 
  WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky AND tbl_dangky.tenkhachhang  LIKE '%$tukhoa%' 
  ORDER BY tbl_cart.id_cart DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  $ds_dh = array();
  while($row =mysqli_fetch_array($query_lietke_dh)){
    $madonhang = $row['code_cart'];
    $tenkhachhang = $row['tenkhachhang'];
    $email= $row['email'];
    $diachi= $row['diachi'];
    $dienthoai= $row['dienthoai'];
    $tinhtrang= $row['cart_status'];
    $thanhtoan= $row['thanhtoan'];
    $hinhthucthanhtoan= $row['HinhThucThanhToan'];
    
    $ngaydat= $row['NgayDat'];
    $ngayChuyenDoi = date_create_from_format("Y-m-d", $ngaydat);
    $ngayDinhDangMoi = date_format($ngayChuyenDoi, "d-m-y");
    $donhang= new DonHang($madonhang, $tenkhachhang,$email,$diachi,$dienthoai,$tinhtrang,$thanhtoan,$hinhthucthanhtoan,$ngayDinhDangMoi);
    array_push($ds_dh, $donhang);
  }
  return $ds_dh;
}
function CapNhatThanhToan($code)
{
  $mysqli = config();
  $sql= mysqli_query($mysqli,"UPDATE tbl_cart SET thanhtoan=1 WHERE code_cart='".$code."'");
}

?>