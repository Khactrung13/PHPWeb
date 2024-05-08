<?php
  include "model/DonHang.php"; 
  include_once "controller/DonHangController.php"; 
  $ds_donhang = loadDonHang();
?>

<h3 class="text-center font-weight-bold p-3">Quản lý đơn hàng</h3>

<div class="mb-5">
  <form class="form-inline float-right" action="?action=donhang&query=timkiem" method="POST">
    <div class="form-group">
      <input class="form-control mr-2" type="search" placeholder="Từ khóa ..." aria-label="Search" name="tukhoa">
      <button class="btn bg-dark btn-outline-danger my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm </button>
    </div>
  </form>
</div>


<h5 class="py-3">Danh sách đơn hàng</h5>

<table class="table border">
  <tr class="text-white bg-dark">
    <th>STT</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Ngày đặt hàng</th>
    <th>Tình trạng</th>
    <th>Thanh toán</th>
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
    <td><?php echo $donhang ->madonhang ?></td>
    <td><?php echo $donhang ->tenkhachhang ?></td>
    <td><?php echo $donhang ->ngaydat ?></td>
    <td>
        <?php
            if($donhang ->tinhtrang==1){
              echo 'Đơn hàng mới';
            }else{
              echo 'Đã xem';
            }
        ?>
    </td>
    <td>
        <?php
            if($donhang ->thanhtoan==1){
              echo 'Đã thanh toán';
            }else{
              echo 'Chưa thanh toán'; ?>
              
              <a href="controller/CapNhatThanhToan.php?code=<?php echo $donhang ->madonhang?>">Cập nhật</a>
            <?php }
            
        ?>
    </td>
    <td>
        <?php
            if($donhang->hinhthucthanhtoan==1){
              echo 'Thanh toán Online';
            }else{
              echo 'Thanh toán khi nhận hàng';
            }
        ?>
    </td>
    <td>
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $donhang ->madonhang?>">Xem đơn hàng</a>
       
    </td>  
  </tr>
    <?php
    }
    ?>
</table>