<?php
    if($_GET['thongbao']=='nhapdayduthongtin'){
        echo '<p style="color:red;font-size: 20px;
        font-weight: bold;
        margin-left: 420px;">Vui lòng nhập đầy đủ thông tin!!!</p> ';
    }
?>
<?php
  include_once "model/SanPham.php"; 
  include_once "controller/SanPhamcontroller.php"; 
  include_once "model/DanhMucSp.php"; 
  include_once "controller/DanhMucController.php"; 
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
      <h5 class="text-center font-weight-bold">Sửa sản phẩm</h5>
      <?php
        $sanpham = GetSanPham($_GET['idsanpham']);
      ?>
      <form method="POST" action="controller/SanPham.php?idsanpham=<?php echo $sanpham->id_sanpham?>" enctype="multipart/form-data">
        <div class="form-group">
          <label>Tên sản phẩm</label>
          <input class="form-control" type ="text" value="<?php echo $sanpham->tensanpham?>" name="tensanpham">
        </div>
        <div class="form-group">
          <label>Mã sản phẩm</label>
          <input class="form-control" ype ="text" value="<?php echo $sanpham->masp ?>" name="masp">
        </div>
        <tr>
          <label>Giá sản phẩm</label>
          <input class="form-control" value="<?php echo $sanpham->giasp ?>" name="giasp">
        </tr>
        <div class="form-group">
          <label>Số lượng</label>
          <input class="form-control" value="<?php echo $sanpham->soluong ?>" name="soluong">
        </div>
        <div class="form-group">
          <label>Hình ảnh</label>
          <input class="form-control" type="file" name="hinhanh">
          <img src="../uploads/<?php echo $sanpham->hinhanh ?> " width="150px">
        </div>
        <div class="form-group">
          <label>Nội dung</label>
          <textarea class="form-control" row="15" cols="100" name="noidung" style="resize:none"><?php echo $sanpham->noidung ?></textarea></td>
        </div>
        <div class="form-group">
          <label>Tóm tắt</label>
          <textarea class="form-control" row="15" cols="100" name="tomtat" style="resize:none"><?php echo $sanpham->tomtat ?></textarea></td>
        </div>
        <div class="form-group">
          <label>Danh mục sản phẩm </label>
          <select name="iddanhmuc" class="form-control">
          <?php
            $ds_danhmuc = loadDanhMuc();
            //$danhmuc1 = GetDanhMuc($_GET['idsanpham']);
            foreach ($ds_danhmuc as $danhmuc) {
              if($danhmuc->id_danhmuc==$sanpham->id_danhmuc){
            ?>
            <option selected value="<?php echo $danhmuc->id_danhmuc ?>"><?php echo $danhmuc->tendanhmuc ?></option>
            <?php
              }else{
            ?>
            <option value="<?php echo $danhmuc->id_danhmuc ?>"><?php echo $danhmuc->tendanhmuc ?></option>
            <?php 
              }   
            }
            ?>
          </select>
        </div>
        <div class="form-group" >
          <label>Tình trạng </label>

          <select name="tinhtrang" class="form-control">
          <?php
              if($sanpham->tinhtrang==1){
            ?>
            <option value="1" selected>Kích hoạt</option>
            <option value="0">Ẩn</option>
            <?php
              }else{
            ?>
              <option value="1">Kích hoạt</option>
              <option value="0" selected>Ẩn</option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="form-group">
          <input class="btn btn-outline-danger" type ="submit" name="suasanpham" value="Sửa sản phẩm"></td>
        </div>
      </form>
    </div>
  </div>
</div>