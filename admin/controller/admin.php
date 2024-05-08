<?php
include_once "../model/Admin.php";
include_once "../../config/config.php";  
function DangNhap($taikhoan,$matkhau){
  $mysqli = config();
  if($taikhoan=='' || $matkhau==''){
    ?>
    <script>
        location.href = '../view/login.php?thongbao=nhapdayduthongtin';
    </script>
    <?php
  }else{
  $matkhau1= md5($matkhau);
  $sql= "SELECT * FROM tbl_admin WHERE  username='".$taikhoan."' AND  password='".$matkhau1."' LIMIT 1";
  $row = mysqli_query($mysqli,$sql);
  $count = mysqli_num_rows($row);
  if($count>0){
      session_start();
      $_SESSION['dangnhap'] = $taikhoan;
      header(("Location:../index.php"));
  }else{
    ?>
    <script>
        location.href = '../view/login.php?thongbao=sai';
    </script>
    <?php
  }
}
}
function DoiMatKhau($taikhoan,$matkhaucu,$matkhau_moi,$matkhau_moi1){
  $mysqli = config();
  if($matkhaucu=='' || $matkhau_moi=='' || $matkhau_moi1==''){
    ?>
    <script>
        location.href = '../index.php?action=doimatkhau&query=doimatkhau&thongbao=nhapdayduthongtin';
    </script>
    <?php
  }else {
  if($matkhau_moi==$matkhau_moi1){
      $matkhau_cu1= md5($matkhaucu);
      $matkhau_moi2= md5($matkhau_moi);
      $sql= "SELECT * FROM tbl_admin WHERE  username='".$taikhoan."' AND  password='".$matkhau_cu1."' LIMIT 1";
      $row = mysqli_query($mysqli,$sql);
      $count = mysqli_num_rows($row);
      if($count>0){
          mysqli_query($mysqli,"UPDATE tbl_admin SET username='".$taikhoan."',password='".$matkhau_moi2."' 
          WHERE  username='".$taikhoan."' AND  password='".$matkhau_cu1."' ");
          ?>
          <script>
              location.href = '../index.php?action=doimatkhau&query=doimatkhau&thongbao=dung';
          </script>
          <?php
        }else{
          ?>
          <script>
              location.href = '../index.php?action=doimatkhau&query=doimatkhau&thongbao=saimatkhaucu';
          </script>
          <?php
        }
}else{
  ?>
  <script>
      location.href = '../index.php?action=doimatkhau&query=doimatkhau&thongbao=sai';
  </script>
  <?php
}
}
}
?>