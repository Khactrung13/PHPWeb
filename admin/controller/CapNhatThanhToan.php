<?php
include "DonHangController.php";

if (isset($_GET['code'])) {
    $confirmation = isset($_GET['confirmation']) ? $_GET['confirmation'] : false;

    if ($confirmation == 'true') {
        CapNhatThanhToan($_GET['code']);
        header('Location: ../index.php?action=quanlydonhang&query=lietke');
        exit();
    } else {
        // Hỏi người dùng xác nhận
        ?>
        <script>
            var result = confirm("Bạn có chắc chắn muốn cập nhật ?");
            if (result == true) {

                window.location.href = "CapNhatThanhToan.php?code=<?php echo $_GET['code']; ?>&confirmation=true";
            } else {
                window.location.href = "../index.php?action=quanlydonhang&query=lietke";
            }
        </script>
        <?php
    }
}
?>