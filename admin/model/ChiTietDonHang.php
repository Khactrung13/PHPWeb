<?php
class ChiTietDonHang
{
  public $madonhang;
  public $tensanpham;
  public $giasp;
  public $soluong;
 

  public function __construct($madonhang, $tensanpham, $giasp, $soluong)
  {
    $this->madonhang = $madonhang;
    $this->tensanpham = $tensanpham;
    $this->giasp = $giasp;
    $this->soluong = $soluong;

  }
  

  public function getMadonhang()
  {
    return $this->madonhang;
  }

  public function setMadonhang($madonhang)
  {
    $this->madonhang = $madonhang;
  }

  public function gettensanpham()
  {
    return $this->tensanpham;
  }

  public function settensanpham($tensanpham)
  {
    $this->tensanpham = $tensanpham;
  }



  public function getgiasp()
  {
    return $this->giasp;
  }

  public function setgiasp($giasp)
  {
    $this->giasp = $giasp;
  }
}