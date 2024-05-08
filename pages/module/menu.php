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

<div class="header-bottom header-sticky">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-12">
        <div class="main-menu text-center d-none d-lg-block">
          <nav class="navbar navbar-expand-lg">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li><a class="navbar-brand" href="index.php">Trang chủ </a> </li>
                <?php 
                if(isset($_SESSION['dangky'])){
                ?>
                <li><a class="nav-link" href="index.php?ql=lichsumuahang">Lịch sử mua hàng </a></li>    
                <?php } ?>           
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danh mục sản phẩm
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                      <a class="dropdown-item" href="index.php?ql=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                    <?php
                    }
                    ?>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>