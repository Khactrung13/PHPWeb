<?php
  include "KhachHangController.php"; 
  $count =GetKhachHang($_POST['email']);
  if($count==0){
    Dangky($_POST['hovaten'],$_POST['email'],$_POST['diachi'],$_POST['matkhau'],$_POST['dienthoai'],$_POST['nhaplaimatkhau']);
  }else{
    ?>
        <script>
        location.href = '../index.php?ql=dangky&thongbao=tontaigmail';
        </script>
    <?php
      } 
?>