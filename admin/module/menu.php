<div class="nav-background">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand text-warning font-weight-bold" href="index.php">Trang chủ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <a class="nav-link" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a>
          <a class="nav-link" href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a>
          <a class="nav-link" href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a>
          <a class="nav-link" href="index.php?action=quanlykhachhang&query=lietke">Quản lý khách hàng</a>
          <a class="nav-link" href="index.php?action=dangxuat&query=dangxuat">Đăng xuất : <?php if (isset($_SESSION['dangnhap'])) {
                                                                                                        echo $_SESSION['dangnhap'];
                                                                                                      } ?></a>
          <a class="nav-link" href="index.php?action=doimatkhau&query=doimatkhau">Đổi mật khẩu</a>
        </ul>
      </div>
    </nav>
  </div>
</div>