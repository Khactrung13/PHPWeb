<?php
include "model/SanPham.php";
include "controller/SanPhamController.php";
?>

<?php
if (isset($_GET['trang'])) {
	$page = $_GET['trang'];
} else {
	$page = '1';
}
if ($page == '' || $page == 1) {
	$begin = 0;
} else {
	$begin = ($page * 12) - 12;
}

?>

<div class="row">
	<?php
	$dssanpham = loadSanPham($begin);
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

<nav>
	<?php
	$trang = PhanTrang();
	?>
	<p class="text-center">Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
	<ul class="list_trang pagination justify-content-center">


		<?php
		for ($i = 1; $i <= $trang; $i++) {
		?>
			<li style ="margin-left: 5px;
" class="page-item"><a <?php if ($i == $page) {
											echo 'style="color:red"';
										} else {
											echo '';
										}
										?> 
										href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a> </li>
		<?php
		}
		?>
	</ul>
</nav>