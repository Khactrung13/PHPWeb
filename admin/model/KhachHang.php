<?php
class KhachHang
{
  public $tenkhachhang;
  public $email;
  public $diachi;
  public $dienthoai;

  public function __construct($tenkhachhang, $email, $diachi, $dienthoai)
  {
    $this->tenkhachhang = $tenkhachhang;
    $this->email = $email;
    $this->diachi = $diachi;
    $this->dienthoai = $dienthoai;

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
 
}