<?php
include "model/SanPham.php";
include "model/DanhMucSp.php";
include "controller/SanPhamController.php";
include "controller/DanhMucController.php";
?>
<?Php
$dssanpham = TimKiemSanPhamByDanhMuc($_GET['id']);
$danhmuc = loadDanhMuc($_GET['id']);
?>


<div class="row">
	<?php
	foreach ($dssanpham as $sanpham) {
	?>
		<div class="col-lg-3 col-md-4 col-sm-6 group-product">
			<div class="featured__item">
				<a href="index.php?ql=sanpham&id=<?php echo $sanpham->id_sanpham ?>">
					<picture>
						<img class="img-fluid set-bg" src="../uploads/<?php echo $sanpham->hinhanh ?>  ">
					</picture>
					<div class="featured__item__text">
						<h6><?php echo $sanpham->tensanpham ?></h6>
						<h5><?php echo number_format($sanpham->giasp, 0, ',', '.') . ' VND' ?></h5>
					</div>
				</a>
			</div>
		</div>
	<?php
	}
	?>
</div>