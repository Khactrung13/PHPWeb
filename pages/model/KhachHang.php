<?php
class KhachHang
{
  public $id_dangky;
  public $tenkhachhang;
  public $email;
  public $diachi;
  public $matkhau;
  public $dienthoai;

 

  public function __construct($id_dangky, $tenkhachhang, $email, $diachi, $matkhau, $dienthoai)
  {
    $this->id_sanpham = $id_dangky;
    $this->tenkhachhang = $tenkhachhang;
    $this->email = $email;
    $this->diachi = $diachi;
    $this->matkhau = $matkhau;
    $this->dienthoai = $dienthoai;
  }
  

  public function getId_dangky()
  {
    return $this->id_dangky;
  }

  public function setId_dangky($id_dangky)
  {
    $this->id_dangky = $id_dangky;
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


  public function getmatkhau()
  {
    return $this->matkhau;
  }

  public function setmatkhau($matkhau)
  {
    $this->matkhau = $matkhau;
  }

  public function getdienthoai()
  {
    return $this->dienthoai;
  }


  public function setdienthoai($dienthoai)
  {
    $this->dienthoai = $dienthoai;
  }
}