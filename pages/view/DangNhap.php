<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="login-wrap p-4 p-md-5">
            <h3 class="text-center mb-4">Đăng nhập</h3>
            <form action="controller/DangNhap.php" autocomplete="off" method="POST">
                <div class="form-group mb-3">
                    <label class="mb-2">Tài khoản</label>
                    <input class="form-control rounded-left" type="text" size="50" name="email" placeholder="abc@example.com">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Mật khẩu</label>
                    <input class="form-control rounded-left" type="password" size="50" name="password" placeholder="Mật khẩu...">
                </div>
                <div class="form-group mb-2">
                    <button type="submit" name="dangnhap" class="form-control rounded submit">Đăng nhập</button>
                </div>
                <div class="text-center">
                    <p>Hoặc</p>
                    <a class="text-danger" href="index.php?ql=dangky">Đăng ký tại đây</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if ($_GET['thongbao'] == 'sai') {
    echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác")</script';
} else if ($_GET['thongbao'] == 'nhapdayduthongtin') {
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script';
}
?>