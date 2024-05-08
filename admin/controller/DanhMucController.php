<?php 
include "../model/DanhMucSp.php";
include "./config/config.php";  
function loadDanhMuc()
{
  $mysqli = config();
  $sql_cate = "SELECT * FROM tbl_danhmuc";
  $query_cate= mysqli_query($mysqli,$sql_cate);
  $ds_danhmuc = array();
  while($row =mysqli_fetch_array($query_cate)){
    $id_danhmuc = $row['id_danhmuc'];
    $tendanhmuc = $row['tendanhmuc'];
    $thutu= $row['thutu'];
    $danhmuc = new DanhMucSp($id_danhmuc, $tendanhmuc,$thutu);
    array_push($ds_danhmuc, $danhmuc);
  }
  return $ds_danhmuc;
}
function ThemDanhMuc($tenloaisp,$thutu)
{
  $mysqli = config();
  $sql_them ="INSERT INTO tbl_danhmuc(tendanhmuc,thutu) 
    VALUES('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
}
function XoaDanhMuc($id)
{
  $mysqli = config();
  $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."' ";
  mysqli_query($mysqli,$sql_xoa);
}
function SuaDanhMuc($id,$tenloaisp,$thutu)
{
  $mysqli = config();
  $sql_sua ="UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."' ,thutu='".$thutu."' 
  WHERE id_danhmuc=$id ";
  mysqli_query($mysqli,$sql_sua);
}
function GetDanhMuc($id)
{
  $mysqli = config();
  $sql_cate = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc =$id LIMIT 1";
  $query_cate= mysqli_query($mysqli,$sql_cate);
  while($row =mysqli_fetch_array($query_cate)){
    $id_danhmuc = $row['id_danhmuc'];
    $tendanhmuc = $row['tendanhmuc'];
    $thutu= $row['thutu'];
    $danhmuc = new DanhMucSp($id_danhmuc, $tendanhmuc,$thutu);
  }
  return $danhmuc;
}
function TimKiemDanhMuc($tendanhmuc)
{
  $mysqli = config();
  $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tendanhmuc like '%$tendanhmuc%'";
  $query_cate= mysqli_query($mysqli,$sql_cate);
  $ds_danhmuc = array();
  while($row =mysqli_fetch_array($query_cate)){
    $id_danhmuc = $row['id_danhmuc'];
    $tendanhmuc = $row['tendanhmuc'];
    $thutu= $row['thutu'];
    $danhmuc = new DanhMucSp($id_danhmuc, $tendanhmuc,$thutu);
    array_push($ds_danhmuc, $danhmuc);
  }
  return $ds_danhmuc;
}
function loadDanhMuc1($id)
{
  $mysqli = config();
  $sql_cate = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc =$id LIMIT 1";
  $query_cate= mysqli_query($mysqli,$sql_cate);
  $ds_danhmuc = array();
  while($row =mysqli_fetch_array($query_cate)){
    $id_danhmuc = $row['id_danhmuc'];
    $tendanhmuc = $row['tendanhmuc'];
    $thutu= $row['thutu'];
    $danhmuc = new DanhMucSp($id_danhmuc, $tendanhmuc,$thutu);
    array_push($ds_danhmuc, $danhmuc);
  }
  return $ds_danhmuc;
}
?>