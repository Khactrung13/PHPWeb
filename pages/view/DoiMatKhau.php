<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="login-wrap p-4 p-md-5">
            <h3 class="text-center mb-4">Đổi mật khẩu</h3>
            <form action="controller/DoiMatKhau.php" autocomplete="off" method="POST">
                <div class="form-group mb-3">
                    <label class="mb-2">Mật khẩu cũ</label>
                    <input class="form-control rounded-left" type="password" name="password_cu">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Mật khẩu mới</label>
                    <input class="form-control rounded-left" type="password" name="password_moi">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Nhập lại mật khẩu mới</label>
                    <input class="form-control rounded-left" type="password" name="password_moi1">
                </div>
                <div class="form-group mb-2">
                    <button type="submit" name="doimatkhau" class="form-control rounded submit">Đổi mật khẩu</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    if($_GET['thongbao']=='dung'){
        echo '<script>alert("Bạn đã đổi mật khẩu thành công")</script';
    }else if($_GET['thongbao']=='sai'){
        echo '<script>alert("Mật khẩu nhập lại không trùng với mật khẩu mới!")</script';
    }else if($_GET['thongbao']=='nhapdayduthongtin'){
        echo '<script>alert("Vui lòng nhập đầy đủ thông tin!!!")</script';
    }else if($_GET['thongbao']=='saimatkhaucu'){
        echo '<script>alert("Mật khẩu cũ không chính xác!!!")</script';
    }
?>