
<?php
  session_start();
  include_once "model/KhachHang.php"; 
  include_once "controller/KhachHangController.php"; 
  $thongtin = ThongTinCaNhan($_SESSION['id_khachhang']);
?>
<p style="font-size: 30px;
    font-weight: bold;
    margin-left: 400px;
    margin-top: 20px;
    color: green;">Thông tin cá nhân</p>
<form style="margin-left: 50px;" action="?ql=chinhsuathongtincanhan&id=<?php echo $_SESSION['id_khachhang']?>" autocomplete="off" method="POST">
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="hovaten">Họ và tên:</label>
     <label style="font-size: 18px;
    font-weight: bold;" for="hovaten"><?php echo $thongtin->tenkhachhang?></label>
  </div>
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="email">Email:</label>
     <label style="font-size: 18px;
    font-weight: bold;" for="email"><?php echo $thongtin->email?></label>
  </div>
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="diachi">Địa chỉ:</label>
     <label style="font-size: 18px;
    font-weight: bold;" for="diachi"><?php echo $thongtin->diachi?></label>
  </div>
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="sdt">Số điện thoại:</label>
     <label style="font-size: 18px;
    font-weight: bold;" for="sdt"><?php echo $thongtin->dienthoai?></label>
  </div>
 
 
  <button style ="    margin-left: 350px;
    background: black;
    color: white;"type="submit" class="btn btn-default">Chỉnh sửa thông tin cá nhân</button>
</form>
