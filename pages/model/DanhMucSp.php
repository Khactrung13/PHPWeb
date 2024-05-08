<?php
class DanhMucSp
{
  public $id_danhmuc;
  public $tendanhmuc;
 

  public function __construct($id_danhmuc, $tendanhmuc)
  {
    $this->id_danhmuc = $id_danhmuc;
    $this->tendanhmuc = $tendanhmuc;
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
}