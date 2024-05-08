<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleadmincp.css">
</head>

<body>
    <?php
    if ($_GET['thongbao'] == 'sai') {
        echo '<p style="color:red;margin-left: 590px;
        font-size: 20px;
        font-weight: bold;">Tài khoản hoặc mật khẩu không chính xác!!</p> ';
    }
    ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="text-center mb-4">Đăng nhập admin</h3>
                        <form action="../controller/DangNhap.php" id="form-login" method="post">
                            <div class="form-group">
                                <i class="far fa-user"></i>
                                <input type="text" class="form-control rounded-left" placeholder="Tên đăng nhập" name="username">
                            </div>
                            <div class="form-group">
                                <i class="fas fa-key"></i>
                                <input type="password" class="form-control rounded-left" placeholder="Mật khẩu" name="password">
                                <div id="eye">
                                    <i class="far fa-eye"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control rounded submit">Đăng nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</html>