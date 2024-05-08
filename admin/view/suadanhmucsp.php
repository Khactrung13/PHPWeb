<?php
  include "model/DanhMucSp.php"; 
  include_once "controller/DanhMucController.php"; 
  $danhmuc= GetDanhMuc($_GET['iddanhmuc']);
?>
<?php
    if($_GET['thongbao']=='nhapdayduthongtin'){
        echo '<p style="color:red;font-size: 20px;
        font-weight: bold;
        margin-left: 420px;">Vui lòng nhập đầy đủ thông tin!!!</p> ';
    }
?>
<div class="mb-5">
  <form class="form-inline float-right" action="?action=quanlydanhmucsanpham&query=timkiem" method="POST">
    <div class="form-group">
      <input class="form-control mr-2" type="search" placeholder="Từ khóa ..." aria-label="Search" name="tukhoa">
      <button class="btn bg-dark btn-outline-danger my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm </button>
    </div>
  </form>
</div>
  </br>
<p style="    font-size: 30px;
    font-weight: bold;
    padding-left: 350px;
    margin-top: 20px;">Quản lý danh mục sản phẩm</p>


<div class="row justify-content-center">
  <div class="col-md-12 col-lg-12" style="    margin-top: 30px;
    margin-left: 100px;">
    <div class="login-wrap p-4 p-md-5">
      <h5 class="text-center font-weight-bold">Sửa danh mục sản phẩm</h5>
      <form method="POST" action="controller/DanhMuc.php?iddanhmuc=<?php echo $danhmuc->id_danhmuc?>">   
        <div class="form-group">
          <label>Tên danh mục</label>
          <input class="form-control"  value="<?php echo $danhmuc->tendanhmuc ?>" type="text" name="tendanhmuc">
        </div>
        <div class="form-group">
          <label>Thứ tự </label>
          <input class="form-control" value="<?php echo $danhmuc->thutu ?>" type="text" name="thutu">
        </div>
        <div class="form-group">
          <input class="btn btn-outline-danger form-control" type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-8 col-lg-8" style="margin-top: 30px;">
    <?php include('view/lietkedanhmucsp.php'); ?>
  </div>
</div>