<?php
  include "model/DanhMucSp.php"; 
  include_once "controller/DanhMucController.php"; 
  $ds_danhmuc = TimKiemDanhMuc($_POST['tukhoa']);
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
<p style="font-size: 18px;
    font-weight: bold;padding-left:20px;color:red;margin-top: 20px;"> Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']?></p>
<?php 
if($ds_danhmuc==null){
  echo '<p style="color:red;margin-left:20px;
  font-size: 20px;
  font-weight: bold;">Không tim thấy!!</p> ';
}else{
?>
<div>
  <h3 class="text-center p-3">Liệt kê danh mục sản phẩm</h3>
  <table class="table border">
    <tr class="bg-dark text-white">
      <th scope="col">Id</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Quản lý</th>
    </tr>
    <?php
    
    $i = 0;
    foreach ($ds_danhmuc as $danhmuc) {
        $i++;
    ?>
      <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $danhmuc->tendanhmuc ?></td>
        <td>
          <button class="btn btn-danger">
            <a class="text-white" href="controller/DanhMuc.php?iddanhmuc=<?php echo $danhmuc->id_danhmuc ?>">Xoá</a> 
          </button>
          <button class="btn btn-warning">
            <a class="text-white" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $danhmuc->id_danhmuc ?>">Sửa</a>
          </button>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>
</div>
<?php } ?>