<?php
session_start();
include_once "model/KhachHang.php";
include_once "controller/KhachHangController.php";
$thongtin = KhachHang($_SESSION['id_khachhang']);
?>

<div class="row justify-content-center">
  <div class="col-md-6 col-lg-8">
    <div class="login-wrap p-4 p-md-5">
      <h3>Thông tin nhận hàng</h3>
      <form action="controller/ThongTinNhanHang.php?id=<?php echo $_GET['id'] ?>" autocomplete="off" method="POST">
        <div class="form-group mb-3">
          <label class="mb-2" for="email">Họ và tên người nhận:</label>
          <input type="text" value="<?php echo $thongtin->tenkhachhang ?>" name="hovaten" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label class="mb-2" for="pwd">Số điện thoại người nhận:</label>
          <input type="text" value="<?php echo $thongtin->dienthoai ?>" name="sodienthoai" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label class="mb-2" for="pwd">Địa chỉ người nhận:</label>
          <input type="text" value="<?php echo $thongtin->diachi ?>" name="diachi" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label class="mb-2" for="pwd">Ghi chú:</label>
          <input type="text" name="ghichu" class="form-control">
        </div>
        <button type="submit" class="btn submit form-control">Tiếp tục</button>
      </form>
    </div>
  </div>
</div>

<?php if ($_GET['thongbao'] == 'sai') {
  echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script';
} ?>