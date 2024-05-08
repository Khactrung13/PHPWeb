<?php
class DonHang
{
  public $madonhang;
  public $tenkhachhang;
  public $email;
  public $diachi;
  public $dienthoai;
  public $tinhtrang;
  public $thanhtoan;
  public $hinhthucthanhtoan;
  public $ngaydat;
  public function __construct($madonhang, $tenkhachhang, $email, $diachi, $dienthoai,$tinhtrang,$thanhtoan,$hinhthucthanhtoan,$ngaydat)
  {
    $this->madonhang = $madonhang;
    $this->tenkhachhang = $tenkhachhang;
    $this->email = $email;
    $this->diachi = $diachi;
    $this->dienthoai = $dienthoai;
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

  public function gettenkhachhang()
  {
    return $this->tenkhachhang;
  }

  public function settenkhachhang($tenkhachhang)
  {
    $this->tenkhachhang = $tenkhachhang;
  }

  public function getemail()
  {
    return $this->email;
  }


  public function setemail($email)
  {
    $this->email = $email;
  }

  public function getdienthoai()
  {
    return $this->dienthoai;
  }


  public function setdienthoai($dienthoai)
  {
    $this->dienthoai = $dienthoai;
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