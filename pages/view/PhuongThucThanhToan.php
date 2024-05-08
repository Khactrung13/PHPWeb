<?php
  include "model/ThongTinNhanHang.php"; 
  include "controller/ThongTinNhanHang.php"; 
  $thongtinnhanhang =  loadThongTinNhanHang($_GET['id']);
?>
<p style="    font-size: 30px;
    margin-left: 400px;
    font-weight: bold;
    color: green;">Thanh toán</p>
<form action="controller/XuLyThanhToan.php?id=<?php echo $_GET['id'] ?>" method="post">
<div class="row">
    <div class="col-md-8">
        <p style="font-size: 20px;
    font-weight: bold;">Thông tin nhận hàng</p>
        <form action="" autocomplete="off" method="POST">
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
    font-weight: bold;">Giỏ hàng</p>
        <table style="width:100%; text-align:center;border-collapse:collapse;" border="1">
        <tr>
            <th>ID</th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
        </tr>
        <?php
                $i =0;
                $tongtien=0;
                foreach($_SESSION['cart'] as $cart_item){
                    $thanhtien=$cart_item['soluong']*$cart_item['giasp'];
                    $tongtien+=$thanhtien;
                    $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $cart_item['masp'] ?></td>
            <td><?php echo $cart_item['tensanpham'] ?></td>
            <td><img src ="../uploads/<?php echo $cart_item['hinhanh']; ?>" width="100px" ></td>
            <td>
                
                <?php echo $cart_item['soluong'] ?>
            

            </td>
            <td><?php echo number_format($cart_item['giasp'],0,',','.').' VND' ?></td>
            <td><?php echo number_format($thanhtien,0,',','.').' VND' ?></td>
           
        </tr>
        <?php
            }
            ?>
            <tr>
               
                <div style="clear:both;"></div>
                </td>
            </tr>
</table>
    </div>
    <div class="col-md-4">
        <p style="font-size: 20px;
        font-weight: bold;">Phương thức thanh toán</p>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="0" checked>
            <label  style="margin-bottom:20px" class="custom-control-label" for="customRadio1">Tiền mặt</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value=1>
            
            <label style="margin-bottom:20px" class="custom-control-label" for="customRadio2">Chuyển khoản</label>
        </div>

       <p style="    font-weight: bold;
    font-size: 16px;">Số tiền phải thanh toán: <?php echo number_format($tongtien,0,',','.').' VND' ?></p>
    <input  type="submit" value="Thanh toán khi nhận hàng" name="thanhtoan" class="btn btn-primary btn-block">

        <form style ="margin-top: 20px;" class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="controller/XulyThanhToanMomoATM.php?tongtien=<?php echo $tongtien?>">
                          <input  type="submit" name="momo" value="Thanh toán MoMo" class="btn btn-primary btn-block">

        </form>
    </div>



    
</div>
</form>
<?php
    if($_GET['thongbao']=='giaodichthatbai'){
        echo '<script>alert("Giao dịch không thành công)</script';
    }
?>
