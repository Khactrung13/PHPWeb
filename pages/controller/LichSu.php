<?php
    include "model/DonHang.php";
    include "../../config/config.php";  
    include "model/ChiTietDonHang.php";
    function GetDonHang($id)
{
    $mysqli = config();
    $sql_lietke_dh = "SELECT * FROM tbl_cart WHERE id_khachhang=$id
    ORDER BY id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
    $ds_dh = array();
    while($row =mysqli_fetch_array($query_lietke_dh)){
      $madonhang = $row['code_cart'];
      $tinhtrang= $row['cart_status'];
      $thanhtoan= $row['thanhtoan'];
      $hinhthucthanhtoan= $row['HinhThucThanhToan'];
      $ngaydat= $row['NgayDat'];
      $ngayChuyenDoi = date_create_from_format("Y-m-d", $ngaydat);
      $ngayDinhDangMoi = date_format($ngayChuyenDoi, "d-m-y");
      $donhang= new DonHang($madonhang,$tinhtrang,$thanhtoan,$hinhthucthanhtoan,$ngayDinhDangMoi);
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
?>