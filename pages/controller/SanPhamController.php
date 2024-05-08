
<?php
  include "../model/SanPham.php";
  include "../../config/config.php";  
function PhanTrang(){
  $mysqli = config();
	$sql_trang= mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
	$row_count = mysqli_num_rows($sql_trang);
	$trang= ceil($row_count/12);

  return $trang;
}
function loadSanPham($begin)
{
  $mysqli = config();
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc =tbl_danhmuc.id_danhmuc
	ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,12";
  $query_pro= mysqli_query($mysqli,$sql_pro);
  $ds_sanpham = array();
  while($row =mysqli_fetch_array($query_pro)){
    $id_sanpham = $row['id_sanpham'];
    $tensanpham = $row['tensanpham'];
    $masp = $row['masp'];
    $giasp = $row['giasp'];
    $soluong = $row['soluong'];
    $hinhanh = $row['hinhanh'];
    $tomtat = $row['tomtat'];
    $noidung = $row['noidung'];
    $tinhtrang = $row['tinhtrang'];
    $id_danhmuc =$row['id_danhmuc'];
    $sanpham = new SanPham($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc);
    array_push($ds_sanpham, $sanpham);
  }
  return $ds_sanpham;
}
function ChiTietSanPham($id)
{
  $mysqli = config();
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc  
  WHERE tbl_sanpham.id_danhmuc =tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham=$id LIMIT 1";
  $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
  //$ds_user = array();
  while($row =mysqli_fetch_array($query_chitiet)){
    $id_sanpham = $row['id_sanpham'];
    $tensanpham = $row['tensanpham'];
    $masp = $row['masp'];
    $giasp = $row['giasp'];
    $soluong = $row['soluong'];
    $hinhanh = $row['hinhanh'];
    $tomtat = $row['tomtat'];
    $noidung = $row['noidung'];
    $tinhtrang = $row['tinhtrang'];
    $id_danhmuc =$row['id_danhmuc'];
    $sanpham = new SanPham($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc);
    //array_push($ds_user, $user);
  }
  return $sanpham;
}
function TimKiemSanPham($tukhoa)
{
  $mysqli = config();
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc 
  WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%$tukhoa%'
	ORDER BY id_sanpham DESC ";
  $query_pro= mysqli_query($mysqli,$sql_pro);
  $ds_sanpham = array();
  while($row =mysqli_fetch_array($query_pro)){
    $id_sanpham = $row['id_sanpham'];
    $tensanpham = $row['tensanpham'];
    $masp = $row['masp'];
    $giasp = $row['giasp'];
    $soluong = $row['soluong'];
    $hinhanh = $row['hinhanh'];
    $tomtat = $row['tomtat'];
    $noidung = $row['noidung'];
    $tinhtrang = $row['tinhtrang'];
    $id_danhmuc =$row['id_danhmuc'];
    $sanpham = new SanPham($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc);
    array_push($ds_sanpham, $sanpham);
  }
  return $ds_sanpham;
}
function TimKiemSanPhamByDanhMuc($id)
{
  $mysqli = config();
  $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = $id 
	ORDER BY id_sanpham DESC";
  $query_pro= mysqli_query($mysqli,$sql_pro);
  $ds_sanpham = array();
  while($row =mysqli_fetch_array($query_pro)){
    $id_sanpham = $row['id_sanpham'];
    $tensanpham = $row['tensanpham'];
    $masp = $row['masp'];
    $giasp = $row['giasp'];
    $soluong = $row['soluong'];
    $hinhanh = $row['hinhanh'];
    $tomtat = $row['tomtat'];
    $noidung = $row['noidung'];
    $tinhtrang = $row['tinhtrang'];
    $id_danhmuc =$row['id_danhmuc'];
    $sanpham = new SanPham($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc);
    array_push($ds_sanpham, $sanpham);
  }
  return $ds_sanpham;
}
?>