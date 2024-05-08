<?php
include "model/SanPham.php"; 
include "controller/SanPhamController.php"; 
$sanpham = ChiTietSanPham($_GET['id']);
?>

<section>
  <h1><?php echo $sanpham->tensanpham ?></h1>
  <div class="row">
    <div class="col-lg-8 col-md-6">
      <img class="img-fluid" src="../uploads/<?php echo $sanpham->hinhanh ?>  ">
    </div>
    <div class="col-lg-4 col-md-6">
      <form method="POST" action="controller/GioHang.php?idsanpham=<?php echo $sanpham->id_sanpham?>">
        <div class="d-flex flex-row">
          <label class="font-weight-bold mr-3">Mã sản phẩm: </label>
          <p><?php echo $sanpham->masp ?></p>
        </div>
        <div class="form-group">
          <label class="mr-3">Giá: </label>
          <div class="d-flex flex-row">
            <p class="box-price-present"><?php echo number_format($sanpham->giasp, 0, ',', '.') . 'vnd' ?></p>
            <span class="label label--black">Trả góp 0%</span>
          </div>
        </div>
        <div class="d-flex flex-row mt-2">
          <label class="mr-3">Số lượng trong kho: </label>
          <p><?php echo $sanpham->soluong ?></p>
        </div>
        <div class="form-group block-button ">
          <input class="form-control btn-buynow" name="themgiohang" type="submit" value="Thêm giỏ hàng">
        </div>
      </form>
    </div>
  </div>
  <div class="row my-5">
      <ul class="nav nav-tabs justify-content-center" id="tabs-nav">
        <li class="nav-item p-2" role="presentation"><a class="text-dark" href="#tab1">Thông số kỹ thuật</a></li>
        <li class="nav-item p-2" role="presentation"><a class="text-dark" href="#tab2">Nội dung chi tiết</a></li>
        <li class="nav-item p-2" role="presentation"><a class="text-dark" href="#tab3">Hình ảnh</a></li>
      </ul>
      <div id="tabs-content">
        <div id="tab1" class="tab-content">
          <?php echo $sanpham->tomtat ?>
        </div>
        <div id="tab2" class="tab-content">
          <?php echo $sanpham->noidung ?>
        </div>
        <div id="tab3" class="tab-content">
          <img width="100%" src="../uploads/<?php echo $sanpham->hinhanh ?>  ">
        </div>
      </div> <!-- END tabs-content -->
  </div>
</section>
<?php
?>