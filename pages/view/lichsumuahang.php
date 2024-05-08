
<?php
//include_once "model/Donhang.php";
include_once "controller/LichSu.php";
$ds_donhang = GetDonHang($_SESSION['id_khachhang']);

?>
<div class="row">
  <div class="col-lg-12">
    <h3 class="text-center mb-3">Lịch sử mua hàng</h3>
    <?php 
      if($ds_donhang==null){
        echo "Bạn chưa mua hàng!!!";
      }else{
    ?>
    <table class="table border">
      <tr class="bg-dark text-white">
        <th>STT</th>
        <th>Mã đơn hàng</th>
        <th>Ngày đặt</th>
        <th>Tình trạng</th>
        <th>Hình thức thanh toán</th>
        <th>Quản lý</th>
      </tr>
      <?php
      $i = 0;
      foreach ($ds_donhang as $donhang) {
        $i++;
      ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $donhang->madonhang ?></td>
          <td><?php echo $donhang->ngaydat ?></td>
          <td>
            <?php
            if ($donhang->thanhtoan == 1) {
              echo 'Đã thanh toán';
            } else {
              echo 'Chưa thanh toán';
            }
            ?>
          </td>
          <td>
            <?php
            if ($donhang->hinhthucthanhtoan == 1) {
              echo 'Thanh toán trực tuyến';
            } else {
              echo 'Thanh toán khi nhận hàng';
            }
            ?>
          </td>
          <td>
            <a class="btn btn-outline-primary" href="index.php?ql=chitietdonhang&code=<?php echo $donhang->madonhang ?>">Xem đơn hàng</a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
    <?php } ?>
  </div>
</div>
