<h3 style="font-size: 20px;font-weight: bold;">Giỏ hàng
  <?php
  if (isset($_SESSION['dangky'])) {
    echo ' của ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';
  }
  ?>
</h3>

<div class="row">
  <div class="col-lg-12">
    <?php
    if (isset($_SESSION['cart'])) {
    ?>

      <table class="table border">
        <tr class="bg-dark text-white">
          <th>ID</th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Số lượng</th>
          <th>Giá sản phẩm</th>
          <th>Thành tiền</th>
          <th>Quản lý</th>
        </tr>
        <?php
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
          $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
          $tongtien += $thanhtien;
          $i++;
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $cart_item['masp'] ?></td>
            <td><?php echo $cart_item['tensanpham'] ?></td>
            <td><img src="../uploads/<?php echo $cart_item['hinhanh']; ?>" width="100px"></td>
            <td>
              <a href="controller/GioHang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus" style="color: #d30318;"></i></a>
              <?php echo $cart_item['soluong'] ?>
              <a href="controller/GioHang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus" style="color: #970707;"></i></a>
            </td>
            <td><?php echo number_format($cart_item['giasp'], 0, ',', '.') . ' VND' ?></td>
            <td><?php echo number_format($thanhtien, 0, ',', '.') . ' VND' ?></td>
            <td>
              <button class="btn btn-danger mb-2">
                <a class="text-white" href="controller/GioHang.php?xoa=<?php echo $cart_item['id'] ?> ">Xoá</a>
              </button>
            </td>
          </tr>
        <?php
        }
        ?>
      </table>
      <div class="card">
        <div class="card-body">
          <ul class="d-flex flex-row nav justify-content-between">
            <li style="font-weight: 700" class="text-info"> TỔNG TIỀN: <?php echo number_format($tongtien, 0, ',', '.') . ' VND' ?></><br />
            <li><a href="controller/GioHang.php?xoatatca=1" class="text-danger">Xoá tất cả</a></li>
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
              <li><a href="controller/XacNhanDatHang.php">Đặt hàng</a></li>
            <?php
            } else {
            ?>
              <li><a href="index.php?ql=dangky" class="text-warning" style="font-weight: 700">Đăng ký đặt hàng</a></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>

    <?php
    } else {
    ?>
      <tr>
        <td colspan="8">
          <p>Hiện tại giỏ hàng trống </p>
        </td>
      </tr>
    <?php
    }
    ?>

  </div>
</div>