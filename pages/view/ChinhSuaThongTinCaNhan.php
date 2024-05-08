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
    color: green;">Chỉnh sửa thông tin cá nhân</p>
<form action="controller/ChinhSuaThongTinCaNhan.php?id=<?php echo $_SESSION['id_khachhang']?>" autocomplete="off" method="POST">
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="email">Họ và tên:</label>
    <input type="text" value="<?php echo $thongtin->tenkhachhang?>" name="hovaten" class="form-control">
  </div>
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="pwd">Email:</label>
    <input type="text" value="<?php echo $thongtin->email?>" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="pwd">Số điện thoại:</label>
    <input type="text" value="<?php echo $thongtin->dienthoai?>" name="sodienthoai" class="form-control">
  </div>
  <div class="form-group">
    <label style="font-size: 18px;
    font-weight: bold;" for="pwd">Địa chỉ:</label>
    <input type="text" value="<?php echo $thongtin->diachi?>" name="diachi" class="form-control">
  </div>
  <button style ="    width: 30%;
    font-size: 25px;
    margin-left: 400px;
    background: black;
    color: white;"type="submit" class="btn btn-default">Chỉnh sửa</button>
</form>

<?php if($_GET['thongbao']=='sai'){
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script';
  }?>