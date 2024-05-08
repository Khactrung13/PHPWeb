<?php 
include "../model/KhachHang.php";
include "../../config/config.php";  
function loadKhachHang()
{
  $mysqli = config();
  $sql_lietke_dh = "SELECT * FROM tbl_dangky" ;
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  $ds_dh = array();
  while($row =mysqli_fetch_array($query_lietke_dh)){
    $tenkhachhang = $row['tenkhachhang'];
    $email= $row['email'];
    $diachi= $row['diachi'];
    $dienthoai= $row['dienthoai'];
    $donhang= new KhachHang($tenkhachhang,$email,$diachi,$dienthoai);
    array_push($ds_dh, $donhang);
  }
  return $ds_dh;
}
function TimkiemKhachHang($tukhoa)
{
  $mysqli = config();
  $sql_lietke_dh = "SELECT * FROM tbl_dangky WHERE tenkhachhang LIKE '%$tukhoa%' " ;
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  $ds_dh = array();
  while($row =mysqli_fetch_array($query_lietke_dh)){
    $tenkhachhang = $row['tenkhachhang'];
    $email= $row['email'];
    $diachi= $row['diachi'];
    $dienthoai= $row['dienthoai'];
    $donhang= new KhachHang($tenkhachhang,$email,$diachi,$dienthoai);
    array_push($ds_dh, $donhang);
  }
  return $ds_dh;
}
?>