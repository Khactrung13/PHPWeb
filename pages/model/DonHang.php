<?php
class DonHang
{
  public $madonhang;
  public $tinhtrang;
 
  public $thanhtoan;
  public $hinhthucthanhtoan;
  public $ngaydat;
  public function __construct($madonhang,$tinhtrang,$thanhtoan,$hinhthucthanhtoan,$ngaydat)
  {
    $this->madonhang = $madonhang;
    $this->tinhtrang = $tinhtrang;
    $this->thanhtoan = $thanhtoan;
    $this->hinhthucthanhtoan = $hinhthucthanhtoan;
    $this->ngaydat = $ngaydat;
  }
  public function getMaDonHang()
  {
    return $this->madonhang;
  }

  public function setMaDonHang($madonhang)
  {
    $this->madonhang = $madonhang;
  }

  public function getTinhTrang()
  {
    return $this->tinhtrang;
  }


  public function setTinhTrang($tinhtrang)
  {
    $this->tinhtrang = $tinhtrang;
  }
  public function getThanhToan()
  {
    return $this->thanhtoan;
  }


  public function setThanhToan($thanhtoan)
  {
    $this->thanhtoan = $thanhtoan;
  }
  public function getHinhThucThanhToan()
  {
    return $this->hinhthucthanhtoan;
  }


  public function setHinhThucThanhToan($hinhthucthanhtoan)
  {
    $this->hinhthucthanhtoan = $hinhthucthanhtoan;
  }
  public function getNgaydat()
  {
    return $this->ngaydat;
  }


  public function setNgaydat($ngaydat)
  {
    $this->ngaydat = $ngaydat;
  }
}