
<div class="hero__categories">
	<div class="hero__categories__all">
		<span>Danh mục sản phẩm</span>
	</div>
	<ul style="">
		<?php
		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
		$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
		while ($row = mysqli_fetch_array($query_danhmuc)) {
		?>
			<li><a href="index.php?ql=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"
							class = "<?php if($_GET['id'] === $row['id_danhmuc']) echo "choosed";?>">
						<?php echo $row['tendanhmuc'] ?></a></li>
		<?php
		}
		?>
	</ul>
</div>