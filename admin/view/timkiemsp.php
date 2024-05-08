<?php
  include_once "model/SanPham.php"; 
  include_once "controller/SanPhamcontroller.php"; 
  $dssanpham = TimKiemSanPham($_POST['tukhoa']);
?>
<h2 class="text-center p-4 font-weight-bold">Quản lý sản phẩm</h2>

<div class="mb-5">
  <form class="form-inline float-right" action="?action=sanpham&query=timkiem" method="POST">
    <div class="form-group">
      <input class="form-control mr-2" type="search" placeholder="Từ khóa ..." aria-label="Search" name="tukhoa">
      <button class="btn bg-dark btn-outline-danger my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm </button>
    </div>
  </form>
</div>
<p style="font-size: 18px;
    font-weight: bold;padding-left:20px;color:red;margin-top: 20px;"> Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']?></p>
<?php 
if($dssanpham==null){
  echo '<p style="color:red;margin-left:20px;
  font-size: 20px;
  font-weight: bold;">Không tim thấy!!</p> ';
}else{
?>
<h3 class="text-center p-3">Liệt kê sản phẩm</h3>
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
<?php } ?>