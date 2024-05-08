<?php
include_once "SanPhamcontroller.php";
$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
//xuly hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh =time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['iddanhmuc'];


if(isset($_POST['themsanpham'])){
    if($tensanpham=='' || $masp=='' || $giasp=='' || $soluong=='' || $tomtat=='' || $noidung=='' ){
        //header('Location:../index.php?action=quanlysp&query=them&thongbao=nhapdayduthongtin');
        ?>
        <script>
            location.href = '../index.php?action=quanlysp&query=them&thongbao=nhapdayduthongtin';
        </script>
        <?php
    }else{
        ThemSanPham($tensanpham,$masp,$giasp,$soluong,$hinhanh,$tomtat,$noidung,$tinhtrang,$danhmuc);
        move_uploaded_file($hinhanh_tmp,'../../uploads/'.$hinhanh);
        header('Location:../index.php?action=quanlysp&query=them');
    }
}
else if(isset($_POST['suasanpham'])){
    if($tensanpham=='' || $masp=='' || $giasp=='' || $soluong=='' || $tomtat=='' || $noidung=='' ){
        header('Location:../index.php?action=quanlysp&query=sua&thongbao=nhapdayduthongtin&idsanpham='.$_GET['idsanpham']);
    }else{
        if(!empty($_FILES['hinhanh']['name'])){
            move_uploaded_file($hinhanh_tmp,'../../uploads/'.$hinhanh);
            XoaAnh($_GET['idsanpham']);
            SuaSanPham($tensanpham,$masp,$giasp,$soluong,$hinhanh,$tomtat,$noidung,$tinhtrang,$danhmuc,$_GET['idsanpham']);
        }else{
            SuaSanPham1($tensanpham,$masp,$giasp,$soluong,$tomtat,$noidung,$tinhtrang,$danhmuc,$_GET['idsanpham']);
        }
        header('Location:../index.php?action=quanlysp&query=them');
    }
    //header('Location:../index.php?action=quanlysp&query=them');
}else {
    if (isset($_GET['idsanpham'])) {
        $confirmation = isset($_GET['confirmation']) ? $_GET['confirmation'] : false;

        if ($confirmation == 'true') {
            // Xác nhận xóa
            XoaSanPham($_GET['idsanpham']);
            XoaAnh($_GET['idsanpham']);
            header('Location:../index.php?action=quanlysp&query=them');
            exit();
        } else {
            // Hỏi người dùng xác nhận
            ?>
            <script>
                var result = confirm("Bạn có chắc chắn muốn xoá sản phẩm này?");
                if (result == true) {
                    window.location.href = "SanPham.php?idsanpham=<?php echo $_GET['idsanpham']; ?>&confirmation=true";
                } else {
                    window.location.href = "../index.php?action=quanlysp&query=them";
                }
            </script>
            <?php
        }
    }

}
?>