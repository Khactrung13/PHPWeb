<?php
  include "model/KhachHang.php"; 
  include_once "controller/KhachHang.php"; 
  $ds_khachhang = loadKhachHang();
?>
<h3 class="text-center font-weight-bold p-3">Quản lý khách hàng</h3>

<div class="mb-5">
  <form class="form-inline float-right" action="?action=khachhang&query=timkiem" method="POST">
    <div class="form-group">
      <input class="form-control mr-2" type="search" placeholder="Từ khóa ..." aria-label="Search" name="tukhoa">
      <button class="btn bg-dark btn-outline-danger my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm </button>
    </div>
  </form>
</div>


<h5 class="py-3">Danh sách khách hàng</h5>

<table class="table border">
  <tr class="bg-dark text-white">
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