<?php
session_start();
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>

<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    session_destroy();
  
}
?>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="d-flex justify-content-between align-items-center flex-sm">
                    <div class="header-info-left d-flex align-items-center">
                        <div class="logo">
                            <a href="index.php">
                                <h2 class="text-danger font-weight-bold m-0">PhoneStore</h2>
                            </a>
                        </div>
                        <form action="index.php?ql=timkiem" method="POST" class="form-box">
                            <input type="search" placeholder="Từ khoá ..." aria-label="Search" name="tukhoa">
                            <button type="submit" name="timkiem" class="search-icon">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>


                    <div class="header-info-right navbar-collapse" id="navbarSupportedContent">
                        <ul class="d-flex align-items-center">
                            <li class="shopping-card">
                                <a href="index.php?ql=giohang"><i class="fa-solid fa-cart-shopping" style="font-size: 24px;"></i></a>
                                <div class="cart-count">  <?php 
                                    session_start();
                                    if(isset($_SESSION['soluong'])){
                                        echo $_SESSION['soluong'];
                                    }else{
                                        echo '0';
                                    }                               
                                ?>

                                </div>
                            </li>
                            <?php
                            if (isset($_SESSION['dangky']) || isset($_SESSION['dangnhap'])) {
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Quản lý tài khoản
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" class="nav-link" href="index.php?ql=thongtincanhan"> Thông tin cá nhân </a>
                                        <a class="dropdown-item" class="nav-link" href="index.php?ql=thaydoimatkhau"> Đổi mật khẩu </a>
                                        <a class="dropdown-item" class="nav-link" href="index.php?dangxuat=1"> Đăng xuất : <?php if (isset($_SESSION['dangky'])) {
                                                                                                                                echo $_SESSION['dangky'];
                                                                                                                            } ?> </a>
                                    </div>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li class="nav-item"><a class="btn" href="index.php?ql=dangnhap"> Đăng nhập</a>
                                    <a class="btn" href="index.php?ql=dangky"> Đăng ký</a>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>