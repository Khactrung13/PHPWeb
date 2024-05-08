
<?php
  //include "model/ChiTietDonHang.php"; 
  include_once "controller/LichSu.php"; 
  include "model/ThongTinNhanHang.php"; 
  include_once "controller/ThongTinNhanHang.php"; 
  $ds_sanpham = ChiTietDonHang($_GET['code']);
  //$status = $_GET['cart_status'];
  $code =$_GET['code'];
  $thongtinnhanhang= loadThongTinNhanHang($code);
?>
<p style="font-size: 30px;
    font-weight: bold;
    padding-left: 450px;">Chi tiết đơn hàng</p>

<p style="font-size: 20px;
    font-weight: bold;
    margin: 5px;">Thông tin nhận hàng</p>
<form action="controller/ThongTinNhanHang.php?id=<?php echo $_GET['id']?>" autocomplete="off" method="POST">
            <div class="form-group">
                <li>Họ và tên người nhận:<b><?php echo  $thongtinnhanhang->tenkhachhang ?></b></li>
               
            </div>
            <div class="form-group">
                <li>Số điện thoại người nhận:<b><?php echo  $thongtinnhanhang->dienthoai ?></b></li>
                
            </div>
            <div class="form-group">
                <li>Địa chỉ người nhận:<b><?php echo  $thongtinnhanhang->diachi ?></b></li>
                
            </div>
            <div class="form-group">
                <li>Ghi chú:<b><?php echo  $thongtinnhanhang->ghichu ?></b></li>
               
            </div>
        
        </form>
<p style="font-size: 20px;
    font-weight: bold;
    margin: 5px;">Danh sách sản phẩm</p>

<table style="width:90%;text-align: center;margin-left:50px" border="1" style="border-collapse:collapse;">
  <tr>
    <th>STT</th>
    <th>Mã đơn hàng</th>
    <th>Tên sản phẩm</th>
    <th>Số lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
  </tr>
    <?php
    $i = 0;
    $tongtien=0;
    foreach ($ds_sanpham as $chitiet) {
        $i++;
        $tongtien=$chitiet->giasp*$chitiet->soluong;
        $thanhtien+=$tongtien;
    ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $chitiet->madonhang ?></td>
    <td><?php echo $chitiet->tensanpham ?></td>
    <td><?php echo $chitiet->soluong ?></td>
    <td><?php echo number_format( $chitiet->giasp,0,',','.').' VND' ?></td>
    <td><?php echo number_format($chitiet->giasp*$chitiet->soluong,0,',','.').' VND' ?></td>
    
  </tr>
    <?php
    }
    ?>
  <tr>
  <td colspan="6">
        <p style="color:red ;padding-left: 550px;font-weight: bold;
    margin: 5px;;font-size:20px">Tổng tiền : <?php echo number_format($thanhtien,0,',','.').' VND' ?> </p>
    </td>
  </tr>
</table