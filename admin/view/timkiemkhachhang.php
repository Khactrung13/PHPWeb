<?php
  include "model/KhachHang.php"; 
  include_once "controller/KhachHang.php"; 
  $ds_khachhang = TimkiemKhachHang($_POST['tukhoa']);
?>
<p style="font-size: 30px;
    font-weight: bold;
    padding-left: 400px;">Quản lý khách hàng</p>
<form style="padding-top: 20px;"class="form-inline my-2 my-lg-0" action="?action=khachhang&query=timkiem" method="POST">
      <input style="margin-left: 800px;" class="form-control mr-sm-2" type="search" placeholder="Từ khoá ....." aria-label="Search" name="tukhoa">
      <button style="color: white;border: 1px solid;background: black;"class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm </button>
    </form>
    <p style="font-size: 18px;
    font-weight: bold;padding-left:20px;color:red;margin-top: 20px;"> Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']?></p>
<?php 
if($ds_khachhang==null){
  echo '<p style="color:red;margin-left:20px;
  font-size: 20px;
  font-weight: bold;">Không tim thấy!!</p> ';
}else{
?>
<p style="font-size: 18px;
    font-weight: bold;padding-left:20px">Danh sách khách hàng</p>
<table style="width:100%;text-align: center;" border="1" style="border-collapse:collapse;">
  <tr>
    <th>STT</th>
    <th>Tên khách hàng</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
  </tr>
    <?php
    $i = 0;
    foreach ($ds_khachhang as $khahhang) {
        $i++;
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $khahhang ->tenkhachhang ?></td>
    <td><?php echo $khahhang ->email ?></td>
    <td><?php echo $khahhang ->diachi?></td>
    <td><?php echo $khahhang ->dienthoai ?></td>
  </tr>
    <?php
    }
    ?>
</table>
<?php } ?>