<?php
include_once "model/DanhMucSp.php";
include_once "controller/DanhMucController.php";
?>
<?php
 if($_GET['thongbao']=='nhapdayduthongtin'){
    echo '<p style="color:red;    margin-left: 420px;
    font-size: 20px;
    font-weight: bold;">Vui lòng nhập đầy đủ thông tin!!!</p> ';
}
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

<div class="row justify-content-center">
  <div class="col-md-8 col-lg-12" style="margin-top: 30px;">
    <div class="login-wrap p-4 p-md-5">
      <h5 class="text-center font-weight-bold">Thêm sản phẩm</h5>
      <form method="POST" action="controller/SanPham.php" enctype="multipart/form-data">
        <div class="form-group">
          <label>Tên sản phẩm</label>
          <input class="form-control" type="text" name="tensanpham">
        </div>
        <div class="form-group">
          <label>Mã sản phẩm</label>
          <input class="form-control" type="text" name="masp">
        </div>
        <tr>
          <label>Giá sản phẩm</label>
          <input class="form-control" type="text" name="giasp">
        </tr>
        <div class="form-group">
          <label>Số lượng</label>
          <input class="form-control" type="text" name="soluong">
        </div>
        <div class="form-group">
          <label>Hình ảnh</label>
          <input class="form-control" type="file" name="hinhanh">
        </div>
        <div class="form-group">
          <label>Nội dung</label>
          <textarea class="form-control" row="15" cols="100" name="noidung" style="resize:none"></textarea></td>
        </div>
        <div class="form-group">
          <label>Tóm tắt</label>
          <textarea class="form-control" row="15" cols="100" name="tomtat" style="resize:none"></textarea></td>
        </div>
        <div class="form-group">
          <label>Danh mục sản phẩm </label>
          <select name="iddanhmuc" class="form-control">
            <?php
            $ds_danhmuc = loadDanhMuc();
            foreach ($ds_danhmuc as $danhmuc) {
            ?>
              <option value="<?php echo $danhmuc->id_danhmuc ?>"><?php echo $danhmuc->tendanhmuc ?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group" >
          <label>Tình trạng </label>

          <select name="tinhtrang" class="form-control">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>
          </select>
        </div>
        <div class="form-group">
          <input class="btn btn-outline-danger" type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </div>
      </form>
    </div>
  </div>
  <div class="col-lg-12" style="margin-top: 30px;">
    <?php include('view/lietkesp.php'); ?>
  </div>
</div>
