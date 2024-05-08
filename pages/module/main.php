<section class="hero mt-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<?php
				include("module/sidebar.php");
				?>
			</div>
			<div class="col-lg-9">
					<?php
					if (isset($_GET['ql'])) {
						$tam = $_GET['ql'];
					} else {
						$tam = '';
					}
					if ($tam == 'danhmucsanpham') {
						include('view/timkiemByDanhMuc.php');
					} else if ($tam == 'giohang') {
						include('view/GioHang.php');
					} else if ($tam == 'sanpham') {
						include('view/sanpham.php');
					} else if ($tam == 'dangky') {
						include('view/DangKy.php');
					} else if ($tam == 'thanhtoan') {
						include('controller/XacNhanDatHang.php');
					} else if ($tam == 'dangnhap') {
						include('view/DangNhap.php');
					} else if ($tam == 'timkiem') {
						include('view/timkiem.php');
					} else if ($tam == 'camon') {
						include('view/camon.php');
					} else if ($tam == 'thongtinnhanhang') {
						include('view/thongtinnhanhang.php');
					} else if ($tam == 'lichsumuahang') {
						include('view/lichsumuahang.php');
					} else if ($tam == 'thaydoimatkhau') {
						include('view/DoiMatKhau.php');
					} else if ($tam == 'phuongthucthanhtoan') {
						include('view/PhuongThucThanhToan.php');
					} else if ($tam == 'chitietdonhang') {
						include('view/ChiTietDonHang.php');
					} else if ($tam == 'thongtincanhan') {
						include('view/Thongtincanhan.php');
					} else if ($tam == 'chinhsuathongtincanhan') {
						include('view/ChinhSuaThongTinCaNhan.php');
					} else {
						include('view/index.php');
					}

					?>
				</div>
		</div>
	</div>
</section>