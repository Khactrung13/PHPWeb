<?php
  include "model/Donhang.php"; 
  include_once "controller/DonHangcontroller.php"; 
  $ds_donhang = timkiem($_POST['tukhoa']);
?>

<p style="font-size: 30px;
    font-weight: bold;
    padding-left: 400px;">Quản lý đơn hàng</p>

<form style="padding-top: 20px;"class="form-inline my-2 my-lg-0" action="?action=donhang&query=timkiem" method="POST">
      <input style="margin-left: 800px;" class="form-control mr-sm-2" type="search" placeholder="Từ khoá ....." aria-label="Search" name="tukhoa">
      <button style="color: white;border: 1px solid;background: black;"class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem">Tìm kiếm </button>
    </form>
    <p style="font-size: 18px;
    font-weight: bold;padding-left:20px;color:red;margin-top: 20px;"> Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']?></p>
<?php 
if($ds_donhang==null){
  echo '<p style="color:red;margin-left:20px;
  font-size: 20px;
  font-weight: bold;">Không tim thấy!!</p> ';
}else{
?>
<p style="font-size: 18px;
    font-weight: bold;padding-left:20px">Danh sách đơn hàng</p>
<table style="width:100%;text-align: center;" border="1" style="border-collapse:collapse;">
  <tr>
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
              echo 'Chưa thanh toán';
            }
        ?>
    </td>
    <td>
        <?php
            if($donhang ->phuongthucthanhtoan==1){
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
<?php } ?>