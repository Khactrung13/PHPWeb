<?php 
include "../model/KhachHang.php";
include "../../config/config.php";  

function GetKhachHang($user)
{
  $mysqli = config();
  $sql= "SELECT * FROM tbl_dangky WHERE  email='".$user."'";
  $row = mysqli_query($mysqli,$sql);
  $count = mysqli_num_rows($row);
  return $count;
}
function DangKy($tenkhachhang,$emai,$diachi,$matkhau,$dienthoai,$nhaplaimatkhau){
  $mysqli = config();
  if($tenkhachhang=='' || $emai=='' || $diachi==''||$matkhau==''||$dienthoai==''||$nhaplaimatkhau==''){
    ?>
    <script>
        location.href = '../index.php?ql=dangky&thongbao=nhapdayduthongtin';
    </script>
    <?php
  }else {
  if($matkhau==$nhaplaimatkhau){
    $matkhau1= md5($matkhau);
    $sql_dangky = mysqli_query($mysqli,
    "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
    VALUE('".$tenkhachhang."','".$emai."','".$diachi."','".$matkhau1."','".$dienthoai."')");
    if($sql_dangky){
        session_start();
        $_SESSION['dangky']= $tenkhachhang;
        $_SESSION['email']= $emai;
        $_SESSION['id_khachhang']= mysqli_insert_id($mysqli);
    
        ?>
    <script>
        location.href = '../index.php?ql=dangky&thongbao=dung';
    </script>
    <?php
    }
}
else{
  ?>
  <script>
      location.href = '../index.php?ql=dangky&thongbao=sai';
  </script>
  <?php
}
  }
}
function DangNhap($email,$matkhau){
  $mysqli = config();
  if($email=='' || $matkhau==''){
    ?>
    <script>
        location.href = '../index.php?ql=dangnhap&thongbao=nhapdayduthongtin';
    </script>
    <?php
  }else{
  $matkhau1= md5($matkhau);
  $sql= "SELECT * FROM tbl_dangky WHERE  email='".$email."' AND  matkhau='".$matkhau1."' LIMIT 1";
  $row = mysqli_query($mysqli,$sql);
  $count = mysqli_num_rows($row);
  if($count>0){
      $row_data = mysqli_fetch_array($row);
      session_start();
      $_SESSION['dangky'] = $row_data['tenkhachhang'];
      $_SESSION['id_khachhang'] = $row_data['id_dangky'];
      $_SESSION['email']= $email;
      ?>
      <script>
          location.href = '../index.php';
      </script>
      <?php
  }else{
    ?>
    <script>
        location.href = '../index.php?ql=dangnhap&thongbao=sai';
    </script>
    <?php
  }
}
}
function DoiMatKhau($taikhoan,$matkhaucu , $matkhau_moi,$matkhau_moi1){
  $mysqli = config();
  if($matkhaucu=='' || $matkhau_moi=='' || $matkhau_moi1==''){
    ?>
    <script>
        location.href = '../index.php?ql=thaydoimatkhau&thongbao=nhapdayduthongtin';
    </script>
    <?php
  }else {
  if($matkhau_moi==$matkhau_moi1){
      $matkhau_cu1= md5($matkhaucu);
      $matkhau_moi2= md5($matkhau_moi);
      $sql= "SELECT * FROM tbl_dangky WHERE  id_dangky='".$taikhoan."' AND  matkhau='".$matkhau_cu1."' LIMIT 1";
      $row = mysqli_query($mysqli,$sql);
      $count = mysqli_num_rows($row);
      if($count>0){
          mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi2."' 
          WHERE  id_dangky='".$taikhoan."' AND  matkhau='".$matkhau_cu1."' ");
          ?>
          <script>
              location.href = '../index.php?ql=thaydoimatkhau&thongbao=dung';
          </script>
          <?php
        }else{
          ?>
          <script>
              location.href = '../index.php?ql=thaydoimatkhau&thongbao=saimatkhaucu';
          </script>
          <?php
        }
}else{
  ?>
  <script>
      location.href = '../index.php?ql=thaydoimatkhau&thongbao=sai';
  </script>
  <?php
}
  }
}
function KhachHang($id)
{
  $mysqli = config();
  $sql_chitiet = "SELECT * FROM tbl_dangky 
  WHERE id_dangky = $id LIMIT 1";
  $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
  while($row =mysqli_fetch_array($query_chitiet)){
    $id_dangky = $row['id_dangky'];
    $tenkhachhang = $row['tenkhachhang'];
    $email = $row['email'];
    $diachi = $row['diachi'];
    $matkhau = $row['matkhau'];
    $dienthoai = $row['dienthoai'];
    $KhachHang = new KhachHang($id_dangky, $tenkhachhang, $email, $diachi, $matkhau, $dienthoai);
  }
  return $KhachHang;
}
function ThongTinCaNhan($id)
{
  $mysqli = config();
  $sql_chitiet = "SELECT * FROM tbl_dangky 
  WHERE id_dangky=$id LIMIT 1";
  $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
  while($row =mysqli_fetch_array($query_chitiet)){
    $id_dangky = $row['id_dangky'];
    $tenkhachhang = $row['tenkhachhang'];
    $email = $row['email'];
    $diachi = $row['diachi'];
    $matkhau = $row['matkhau'];
    $dienthoai = $row['dienthoai'];
    $KhachHang = new KhachHang($id_dangky, $tenkhachhang, $email, $diachi, $matkhau, $dienthoai);
  }
  return $KhachHang;
}
function SuaThongTinCaNhan($id,$ten,$emai , $diachi,$sodt){
  $mysqli = config();
  if($ten=='' || $emai=='' || $diachi=='' || $sodt=='' ){
    ?>
    <script>
        location.href = '../index.php?ql=chinhsuathongtincanhan&thongbao=sai  ';
    </script>
    <?php
  }else {
    $sql_sua ="UPDATE tbl_dangky SET tenkhachhang='".$ten."' ,email='".$emai."',diachi='".$diachi."',dienthoai='".$sodt."'
    WHERE id_dangky='".$id."' ";
    mysqli_query($mysqli,$sql_sua);
    header('Location:../index.php?ql=thongtincanhan');
  }
}
?>