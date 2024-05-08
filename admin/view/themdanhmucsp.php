<?php
if ($_GET['thongbao'] == 'nhapdayduthongtin') {
  echo '<p style="color:red;font-size: 20px;
        font-weight: bold;
        margin-left: 420px;">Vui lòng nhập đầy đủ thông tin!!!</p> ';
}
?>
<h2 class="text-center p-4 font-weight-bold">Quản lý danh mục sản phẩm</h2>

<div class="mb-5">
  <form class="form-inline float-right" action="?action=quanlydanhmucsanpham&query=timkiem" method="POST">
    <div class="form-group">
      <input class="form-control mr-2" type="search" placeholder="Từ khóa ..." aria-label="Search" name="tukhoa">
      <button class="btn bg-dark btn-outline-danger my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm </button>
    </div>
  </form>
</div>

<div class="row justify-content-center">
  <div class="col-md-4 col-lg-4" style="margin-top: 30px;">
    <div class="login-wrap p-4 p-md-5">
      <h5 class="text-center font-weight-bold">Thêm danh mục sản phẩm</h5>
      <form method="POST" action=controller/DanhMuc.php>   
        <div class="form-group">
          <label>Tên danh mục</label>
          <input class="form-control" type="text" name="tendanhmuc">
        </div>
        <div class="form-group">
          <label>Thứ tự </label>
          <input class="form-control" type="text" name="thutu">
        </div>
        <div class="form-group">
          <input class="btn btn-outline-danger form-control" type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-8 col-lg-8" style="margin-top: 30px;">
    <?php include('view/lietkedanhmucsp.php'); ?>
  </div>
</div>