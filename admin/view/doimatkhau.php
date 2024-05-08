<?php
if($_GET['thongbao']=='dung'){
    echo '<p style="color:green;    margin-left: 350px;
    font-size: 20px;
    font-weight: bold;">Bạn đã đổi mật khẩu thành công!!</p> ';
}else if($_GET['thongbao']=='sai'){
    echo '<p style="color:red;    margin-left: 350px;
    font-size: 20px;
    font-weight: bold;">Mật khẩu nhập lại không trùng với mật khẩu mới!!</p> ';
}else if($_GET['thongbao']=='nhapdayduthongtin'){
    echo '<p style="color:red;    margin-left: 350px;
    font-size: 20px;
    font-weight: bold;">Vui lòng nhập đầy đủ thông tin!!!</p> ';
}else if($_GET['thongbao']=='saimatkhaucu'){
    echo '<p style="color:red;    margin-left: 350px;
    font-size: 20px;
    font-weight: bold;">Mật khẩu cũ không chính xác!!!</p> ';
}
?>
<section class="ftco-section">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <h3 class="text-center mb-4">Đổi mật khẩu</h3>
                    <form action="controller/DoiMatKhau.php" autocomplete="off" method="POST">
                        <div class="form-group">
                            <label for="">Mật khẩu cũ</label>
                            <input class="form-control" type="password" name="password_cu">
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu mới</label>
                            <input class="form-control" type="password" name="password_moi"> 
                        </div>
                        <div class="form-group">
                            <label for="">Nhập lại khẩu mới</label>
                            <input class="form-control" type="password" name="password_nhaplai">
                        </div>
                        <div class="form-group">
                            <button class="btn form-control submit" type="submit" name="doimatkhau">Đổi mật khẩu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
