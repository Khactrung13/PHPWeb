<?php
    include "../model/SanPham.php";
    include "../../config/config.php";  
    function loadSanPham()
    {
        $mysqli = config();
        $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc =tbl_danhmuc.id_danhmuc
        ORDER BY tbl_sanpham.id_sanpham DESC";
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
        $tendanhmuc = $row['tendanhmuc'];
        $sanpham = new SanPham($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc,$tendanhmuc);
        array_push($ds_sanpham, $sanpham);
      }
      return $ds_sanpham;
    }
    function ThemSanPham($tensanpham,$masp,$giasp,$soluong,$hinhanh,$tomtat,$noidung,$tinhtrang,$danhmuc)
    {
      $mysqli = config();
      $sql_them ="INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) 
      VALUES('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."',
      '".$noidung."','".$tinhtrang."','".$danhmuc."')";
      mysqli_query($mysqli,$sql_them);
    }
    function XoaSanPham($id)
    {
      $mysqli = config();
      $sql= "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query)){
          unlink('../../uploads/'.$row['hinhanh']);
      }
      $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."' ";
      mysqli_query($mysqli,$sql_xoa);
    }
    function GetSanPham($id)
    {
      $mysqli = config();
      $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham =$id LIMIT 1";
      $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
      while($row =mysqli_fetch_array($query_sua_sp)){
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
        $tendanhmuc = $row['tendanhmuc'];
        $sanpham = new SanPham($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc,$tendanhmuc);
    
      }
      return $sanpham;
    }
    function SuaSanPham($tensanpham,$masp,$giasp,$soluong,$hinhanh,$tomtat,$noidung,$tinhtrang,$danhmuc,$id)
    {
      $mysqli = config();
      $sql_sua ="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."' ,masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',
      hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',
      tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."'
      WHERE id_sanpham=$id ";
      mysqli_query($mysqli,$sql_sua);
    }
    function SuaSanPham1($tensanpham,$masp,$giasp,$soluong,$tomtat,$noidung,$tinhtrang,$danhmuc,$id)
    {
      $mysqli = config();
      $sql_sua1 ="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."' ,masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',
      tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."'
      WHERE id_sanpham='$_GET[idsanpham]' ";
      mysqli_query($mysqli,$sql_sua1);
    }
    function XoaAnh($id)
    {
      $mysqli = config();
      $sql= "SELECT * FROM tbl_sanpham WHERE id_sanpham =$id LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query)){
            unlink('../../uploads/'.$row['hinhanh']);
      }
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
        $tendanhmuc = $row['tendanhmuc'];
        $sanpham = new SanPham($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc,$tendanhmuc);
        array_push($ds_sanpham, $sanpham);
      }
      return $ds_sanpham;
    }
?>