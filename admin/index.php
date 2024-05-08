<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:view/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<title>Admincp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">

</head>
<body>

    <div class="wrapper">
    <?php
        include("../config/config.php");
        include("module/header.php");
        include("module/menu.php");
        include("module/main.php");
        include("module/footer.php");
    ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
        //CKEDITOR.replace('thongtinlienhe');
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>