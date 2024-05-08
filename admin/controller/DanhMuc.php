<?php
    include "../../config/config.php";  
    include_once "DanhMucController.php";
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    if($tenloaisp=='' || $thutu==''){
        header('Location:../index.php?action=quanlydanhmucsanpham&query=them&thongbao=nhapdayduthongtin');
    }else{
        ThemDanhMuc($tenloaisp,$thutu);
        header('Location:../index.php?action=quanlydanhmucsanpham&query=them');
    }
}else if(isset($_POST['suadanhmuc'])){
    if($tenloaisp=='' || $thutu==''){
        header('Location:../index.php?action=quanlydanhmucsanpham&query=sua&thongbao=nhapdayduthongtin&iddanhmuc='.$_GET['iddanhmuc']);
    }else{
        SuaDanhMuc($_GET['iddanhmuc'],$tenloaisp,$thutu);
        header('Location:../index.php?action=quanlydanhmucsanpham&query=them');
    }
}
else {
    if (isset($_GET['iddanhmuc'])) {
        $confirmation = isset($_GET['confirmation']) ? $_GET['confirmation'] : false;

        if ($confirmation == 'true') {
            // Xác nhận xóa
            XoaDanhMuc($_GET['iddanhmuc']);
            header('Location:../index.php?action=quanlydanhmucsanpham&query=them');
            exit();
        } else {
            // Hỏi người dùng xác nhận
            ?>
            <script>
                var result = confirm("Bạn có chắc chắn muốn xoá danh mục này?");
                if (result == true) {
                    window.location.href = "DanhMuc.php?iddanhmuc=<?php echo $_GET['iddanhmuc']; ?>&confirmation=true";
                } else {
                    window.location.href = "../index.php?action=quanlydanhmucsanpham&query=them";
                }
            </script>
            <?php
        }
    }
}

?>