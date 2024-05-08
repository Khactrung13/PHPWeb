<div class="row justify-content-center">
    <div class="col-md-8 col-lg-8">
        <div class="login-wrap p-4 p-md-5">
            <h3 class="text-center mb-4">Đăng ký thành viên</h3>
            <form action="controller/DangKy.php" method="POSt">
                <div class="form-group mb-3">
                    <label class="mb-2">Họ và tên</label>
                    <input type="text" size="60" name="hovaten" class="form-control round-left">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Email</label>
                    <input type="text" size="60" name="email" class="form-control round-left">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Số điện thoại</label>
                    <input type="text" size="60" name="dienthoai" class="form-control round-left">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Địa chỉ</label>
                    <input type="text" size="60" name="diachi" class="form-control round-left">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Mật khẩu</label>
                    <input type="password" size="60" name="matkhau" class="form-control round-left">
                </div>
                <div class="form-group mb-3">
                    <label class="mb-2">Nhập lại mật khẩu</label>
                    <input type="password" size="60" name="nhaplaimatkhau" class="form-control round-left">
                </div>
                <div class="form-group mb-3">
                    <button type="submit" name="dangky" class="form-control rounded submit">Đăng ký</button>
                </div>

                <div class="text-center">
                    <p>Hoặc</p>
                    <a class="text-danger" href="index.php?ql=dangnhap">Đăng nhập nếu có tài khoản</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if ($_GET['thongbao'] == 'dung') {
    echo '<script>alert("Bạn đã đăng ký thành công")</script';
} else if ($_GET['thongbao'] == 'sai') {
    echo '<script>alert("Mât khẩu nhập lại không chính xác")</script';
} else if ($_GET['thongbao'] == 'nhapdayduthongtin') {
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script';
} else if ($_GET['thongbao'] == 'tontaigmail') {
    echo '<script>alert("Email đã tồn tại!!!")</script';
}
?>