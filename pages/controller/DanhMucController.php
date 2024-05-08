<?php 
include "../model/DanhMucSp.php";
include "../../config/config.php";  
function loadDanhMuc($id)
{
  $mysqli = config();
  $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc =$id LIMIT 1";
  $query_cate= mysqli_query($mysqli,$sql_cate);
  while($row =mysqli_fetch_array($query_cate)){
    $id_danhmuc = $row['id_danhmuc'];
    $tendanhmuc = $row['tendanhmuc'];
    $danhmuc = new DanhMucSp($id_danhmuc, $tendanhmuc);
  }
  return $danhmuc;
}
?>