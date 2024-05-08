<div class="container">
<?php
				if(isset($_GET['action']) && $_GET['query']){
					$tam =$_GET['action'];
					$query = $_GET['query'];
				}
				else{
					$tam ='' ;
					$query='';
				}
				if($tam=='quanlydanhmucsanpham' && $query=='them' ){
					include('view/themdanhmucsp.php');
                    // include('view/lietkedanhmucsp.php');
				}else if($tam=='quanlydanhmucsanpham' && $query=='sua'){
					include('view/suadanhmucsp.php');
				}else if($tam=='quanlysp' && $query=='them'){
					include('view/themsp.php');
                    // include('view/lietkesp.php');
				}else if($tam=='quanlysp' && $query=='sua'){
					include('view/suasp.php');
				}else if($tam=='dangxuat' &&$query=='dangxuat'){
					unset($_SESSION['dangnhap']);
					header('Location:view/login.php');
				}
				else if($tam=='doimatkhau' &&$query=='doimatkhau'){
					include('view/doimatkhau.php');
				}
				else if($tam=='quanlydonhang' &&$query=='lietke'){
					include('view/lietkedonhang.php');
				}
				else if($tam=='donhang' &&$query=='xemdonhang'){
					include('view/xemdonhang.php');
				}else if($tam=='sanpham' &&$query=='timkiem'){
					include('view/timkiemsp.php');
				}else if($tam=='quanlydanhmucsanpham' &&$query=='timkiem'){
					include('view/timkiemdanhmucsp.php');
				}else if($tam=='quanlykhachhang' &&$query=='lietke'){
					include('view/lietkekhachhang.php');
				}else if($tam=='donhang' &&$query=='timkiem'){
					include('view/timkiemdonhang.php');
				}else if($tam=='khachhang' &&$query=='timkiem'){
					include('view/timkiemkhachhang.php');
				}
				else{
					include('module/dashboard.php');
				}

				?>
</div>