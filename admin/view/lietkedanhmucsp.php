<?php
include "model/DanhMucSp.php";
include_once "controller/DanhMucController.php";
?>

<div>
  <table class="table border">
    <tr class="bg-dark text-white">
      <th scope="col">Id</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Quản lý</th>
    </tr>
    <?php
    $ds_danhmuc = loadDanhMuc();
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