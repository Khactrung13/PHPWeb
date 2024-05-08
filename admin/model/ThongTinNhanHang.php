<?php
class ThongTinNhanHang
{
  public $tenkhachhang;
  public $diachi;
  public $ghichu;
  public $dienthoai;
  public $id_donhang;

 

  public function __construct($tenkhachhang, $diachi, $ghichu, $dienthoai,$id_donhang)
  {
    $this->tenkhachhang = $tenkhachhang;
    $this->diachi = $diachi;
    $this->ghichu = $ghichu;
    $this->dienthoai = $dienthoai;
    $this->id_donhang = $id_donhang;
  }
  



  public function gettenkhachhang()
  {
    return $this->tenkhachhang;
  }

  public function settenkhachhang($tenkhachhang)
  {
    $this->tenkhachhang = $tenkhachhang;
  }




  public function getGhiChu()
  {
    return $this->ghichu;
  }

  public function setghichu($ghichu)
  {
    $this->ghichu = $ghichu;
  }

  public function getdienthoai()
  {
    return $this->dienthoai;
  }


  public function setdienthoai($dienthoai)
  {
    $this->dienthoai = $dienthoai;
  }
  public function getId_donhang()
  {
    return $this->id_donhang;
  }


  public function setId_donhang($id_donhang)
  {
    $this->id_donhang = $id_donhang;
  }
}