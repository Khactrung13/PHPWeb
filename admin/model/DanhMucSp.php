<?php
class DanhMucSp
{
  public $id_danhmuc;
  public $tendanhmuc;
  public $thutu;


  public function __construct($id_danhmuc, $tendanhmuc,$thutu)
  {
    $this->id_danhmuc = $id_danhmuc;
    $this->tendanhmuc = $tendanhmuc;
    $this->thutu = $thutu;
  }
  

  public function getId_danhmuc()
  {
    return $this->id_danhmuc;
  }

  public function setId_sanpham($id_danhmuc)
  {
    $this->id_danhmuc = $id_danhmuc;
  }

  public function getTendanhmuc()
  {
    return $this->tendanhmuc;
  }

  public function settendanhmuc($tendanhmuc)
  {
    $this->tendanhmuc = $tendanhmuc;
  }
  public function getThutu()
  {
    return $this->thutu;
  }

  public function setThutu($thutu)
  {
    $this->thutu = $thutu;
  }
}