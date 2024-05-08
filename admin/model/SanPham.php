<?php
class SanPham
{
  public $id_sanpham;
  public $tensanpham;
  public $masp;
  public $giasp;
  public $soluong;
  public $hinhanh;
  public $tomtat;
  public $noidung;
  public $tinhtrang;
  public $id_danhmuc;
  public $tendanhmuc;
 
 

  public function __construct($id_sanpham, $tensanpham, $masp, $giasp, $soluong, $hinhanh, $tomtat,$noidung,$tinhtrang,$id_danhmuc,$tendanhmuc)
  {
    $this->id_sanpham = $id_sanpham;
    $this->tensanpham = $tensanpham;
    $this->masp = $masp;
    $this->giasp = $giasp;
    $this->soluong = $soluong;
    $this->hinhanh = $hinhanh;
    $this->tomtat = $tomtat;
    $this->noidung = $noidung;
    $this->tinhtrang = $tinhtrang;
    $this->id_danhmuc = $id_danhmuc;
    $this->tendanhmuc = $tendanhmuc;

  }
  

  public function getId_sanpham()
  {
    return $this->id_sanpham;
  }

  public function setId_sanpham($id_sanpham)
  {
    $this->id_sanpham = $id_sanpham;
  }

  public function gettensanpham()
  {
    return $this->tensanpham;
  }

  public function settensanpham($tensanpham)
  {
    $this->tensanpham = $tensanpham;
  }

  public function getmasp()
  {
    return $this->masp;
  }


  public function setmasp($masp)
  {
    $this->masp = $masp;
  }


  public function getgiasp()
  {
    return $this->giasp;
  }

  public function setgiasp($giasp)
  {
    $this->giasp = $giasp;
  }

  public function gethinhanh()
  {
    return $this->hinhanh;
  }


  public function sethinhanh($hinhanh)
  {
    $this->hinhanh = $hinhanh;
  }

  public function getnoidung()
  {
    return $this->noidung;
  }

  public function setnoidung($noidung)
  {
    $this->noidung = $noidung;
  }
  public function gettomtat()
  {
    return $this->tomtat;
  }

  public function settomtat($tomtat)
  {
    $this->tomtat = $tomtat;
  }
  public function gettinhtrang()
  {
    return $this->tinhtrang;
  }

  public function settinhtrang($tinhtrang)
  {
    $this->tinhtrang = $tinhtrang;
  }
  public function getid_danhmuc()
  {
    return $this->id_danhmuc;
  }

  public function setid_danhmuc($id_danhmuc)
  {
    $this->id_danhmuc = $id_danhmuc;
  }
  public function getTendanhmuc()
  {
    return $this->tendanhmuc;
  }

  public function setTendanhmuc($tendanhmuc)
  {
    $this->tendanhmuc = $tendanhmuc;
  }
}
