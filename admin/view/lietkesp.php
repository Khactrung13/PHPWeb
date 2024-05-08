<?php
include "model/SanPham.php";
include_once "controller/SanPhamcontroller.php";
?>

<div>
  <h5>Liệt kê sản phẩm</h5>
</div>

<table class="table border">
  <tr class="bg-dark text-white">
    <th>STT</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sản phẩm</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $dssanpham = loadSanPham();

  $i = 0;
  foreach ($dssanpham as $sanpham) {
    $i++;
  ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $sanpham->masp ?></td>
      <td><?php echo $sanpham->tensanpham ?></td>
      <td><img src="../uploads/<?php echo $sanpham->hinhanh ?> " width="150px"></td>
      <td><?php echo number_format($sanpham->giasp, 0, ',', '.') . 'vnd' ?></td>
      <td><?php echo $sanpham->soluong ?></td>
      <td><?php echo $sanpham->tendanhmuc ?></td>
      <td><?php echo $sanpham->tomtat ?></td>
      <td><?php if ($sanpham->tinhtrang == 1) {
            echo 'Kích hoạt';
          } else {
            echo 'Ẩn';
          }
          ?></td>
      <td class="d-flex flex-column">
        <button class="btn btn-danger mb-2">
          <a class="text-white" href="controller/SanPham.php?idsanpham=<?php echo $sanpham->id_sanpham ?>&hinhanh=<?php echo $sanpham->hinhanh ?>">Xoá</a>
        </button>
        <button class="btn btn-warning">
          <a class="text-white" href="?action=quanlysp&query=sua&idsanpham=<?php echo $sanpham->id_sanpham ?>&hinhanh=<?php echo $sanpham->hinhanh ?>">Sửa</a>
        </button>
      </td>
    </tr>
  <?php
  }
  ?>
</table>